<?php

class CRM_Charityimporter_BAO_CharityImporter {

  private $charityDb;
  private $customFields;

  public function __construct() {
    // Initialize charity database connection
    $this->charityDb = new PDO(
      'mysql:host=localhost;dbname=benmang1_charities',
      'benmang1_benmango8',
      '9Zq76twa667P',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Get custom field mappings
    $this->customFields = $this->getCustomFieldMappings();
  }

  /**
   * Import charities in batches
   */
  public function importCharities($batchSize = 100, $startFrom = 0) {
    $stats = [
      'processed' => 0,
      'created' => 0,
      'updated' => 0,
      'errors' => 0
    ];

    // Get charity data
    $stmt = $this->charityDb->prepare("
      SELECT * FROM charities 
      WHERE reg_status <> 'RM' AND reg >= 1209300
      ORDER BY reg 
      LIMIT :limit OFFSET :offset
    ");
    $stmt->bindValue(':limit', $batchSize, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $startFrom, PDO::PARAM_INT);
    $stmt->execute();

    while ($charity = $stmt->fetch(PDO::FETCH_ASSOC)) {
      try {
        $this->importSingleCharity($charity);
        $stats['processed']++;

        // Check if this was a new record or update
        $contact = civicrm_api3('Contact', 'get', [
          'external_identifier' => $charity['reg'],
          'sequential' => 1
        ]);

        if ($contact['count'] == 1) {
          // Determine if created or updated based on created_date vs modified_date
          $contactData = $contact['values'][0];
          if ($contactData['created_date'] == $contactData['modified_date']) {
            $stats['created']++;
          } else {
            $stats['updated']++;
          }
        }

      } catch (Exception $e) {
        $stats['errors']++;
        CRM_Core_Error::debug_log_message("Charity import error for reg {$charity['reg']}: " . $e->getMessage());
      }
    }

    return $stats;
  }

  /**
   * Import a single charity record
   */
  private function importSingleCharity($charity) {
    // Check if organization already exists
    $existingContact = civicrm_api3('Contact', 'get', [
      'external_identifier' => $charity['reg'],
      'sequential' => 1
    ]);

    $contactId = NULL;
    if ($existingContact['count'] > 0) {
      $contactId = $existingContact['values'][0]['id'];
    }

    // Prepare contact data
    $contactParams = [
      'contact_type' => 'Organization',
      'contact_sub_type' => 'Charity', // Your custom organization type
      'organization_name' => $charity['Name'],
      'external_identifier' => $charity['reg'],
      'is_active' => ($charity['reg_status'] == 'Registered') ? 1 : 0,
    ];

    if ($contactId) {
      $contactParams['id'] = $contactId;
    }

    // Create/update contact
    $contact = civicrm_api3('Contact', 'create', $contactParams);
    $contactId = $contact['id'];

    // Handle address
    $this->createOrUpdateAddress($contactId, $charity);

    // Handle email
    if (!empty($charity['email'])) {
      $this->createOrUpdateEmail($contactId, $charity['email']);
    }

    // Handle phone
    if (!empty($charity['phone'])) {
      $this->createOrUpdatePhone($contactId, $charity['phone']);
    }

    // Handle website
    if (!empty($charity['web'])) {
      $this->createOrUpdateWebsite($contactId, $charity['web']);
    }

    // Handle custom fields
    $this->updateCustomFields($contactId, $charity);

    return $contactId;
  }

  /**
   * Create or update address for contact
   */
  private function createOrUpdateAddress($contactId, $charity) {
    // Combine address lines
    $streetAddress = trim(implode("\n", array_filter([
      $charity['address_line_one'],
      $charity['address_line_two'],
      $charity['address_line_three'],
      $charity['address_line_four'],
      $charity['address_line_five']
    ])));

    if (empty($streetAddress)) {
      return;
    }

    // Check for existing address
    $existingAddress = civicrm_api3('Address', 'get', [
      'contact_id' => $contactId,
      'is_primary' => 1,
      'sequential' => 1
    ]);

    $addressParams = [
      'contact_id' => $contactId,
      'location_type_id' => 1, // Main
      'is_primary' => 1,
      'street_address' => $streetAddress,
      'postal_code' => $charity['address_post_code'],
      'country_id' => 'GB' // UK
    ];

    if ($existingAddress['count'] > 0) {
      $addressParams['id'] = $existingAddress['values'][0]['id'];
    }

    civicrm_api3('Address', 'create', $addressParams);
  }

  /**
   * Create or update email for contact
   */
  private function createOrUpdateEmail($contactId, $email) {
    $existingEmail = civicrm_api3('Email', 'get', [
      'contact_id' => $contactId,
      'is_primary' => 1,
      'sequential' => 1
    ]);

    $emailParams = [
      'contact_id' => $contactId,
      'location_type_id' => 1, // Main
      'is_primary' => 1,
      'email' => $email
    ];

    if ($existingEmail['count'] > 0) {
      $emailParams['id'] = $existingEmail['values'][0]['id'];
    }

    civicrm_api3('Email', 'create', $emailParams);
  }

  /**
   * Create or update phone for contact
   */
  private function createOrUpdatePhone($contactId, $phone) {
    $existingPhone = civicrm_api3('Phone', 'get', [
      'contact_id' => $contactId,
      'is_primary' => 1,
      'sequential' => 1
    ]);

    $phoneParams = [
      'contact_id' => $contactId,
      'location_type_id' => 1, // Main
      'is_primary' => 1,
      'phone' => $phone,
      'phone_type_id' => 1 // Phone
    ];

    if ($existingPhone['count'] > 0) {
      $phoneParams['id'] = $existingPhone['values'][0]['id'];
    }

    civicrm_api3('Phone', 'create', $phoneParams);
  }

  /**
   * Create or update website for contact
   */
  private function createOrUpdateWebsite($contactId, $website) {
    $existingWebsite = civicrm_api3('Website', 'get', [
      'contact_id' => $contactId,
      'sequential' => 1
    ]);

    $websiteParams = [
      'contact_id' => $contactId,
      'url' => $website,
      'website_type_id' => 1 // Main
    ];

    if ($existingWebsite['count'] > 0) {
      $websiteParams['id'] = $existingWebsite['values'][0]['id'];
    }

    civicrm_api3('Website', 'create', $websiteParams);
  }

  /**
   * Update custom fields
   */
  private function updateCustomFields($contactId, $charity) {
    $customData = [];

    // Map charity fields to custom fields
    $fieldMappings = [
      'org_number' => 'org_number',
      'charity_type' => 'charity_type',
      'date_registered' => 'date_registered',
      'last_accounts_date' => 'last_accounts_date',
      'latest_income' => 'latest_income',
      'latest_expenditure' => 'latest_expenditure',
      'date_removed' => 'date_removed',
      'reg_status' => 'reg_status',
      'last_updated_register' => 'last_updated_register',
      'website_type' => 'website_type',
      'website_version' => 'website_version',
      'comments' => 'comments'
    ];

    foreach ($fieldMappings as $charityField => $customField) {
      if (isset($this->customFields[$customField]) && !empty($charity[$charityField])) {
        $customData['custom_' . $this->customFields[$customField]] = $charity[$charityField];
      }
    }

    if (!empty($customData)) {
      $customData['id'] = $contactId;
      civicrm_api3('Contact', 'create', $customData);
    }
  }

  /**
   * Get custom field ID mappings
   */
  private function getCustomFieldMappings() {
    $fields = [];

    // Get all custom fields for the charity organization type
    $customFields = civicrm_api3('CustomField', 'get', [
      'sequential' => 1,
      'options' => ['limit' => 0]
    ]);

    foreach ($customFields['values'] as $field) {
      $fields[$field['name']] = $field['id'];
    }

    return $fields;
  }
}