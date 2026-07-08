<?php

  class CRM_CharityImport_Import {

    public static function charity_import() {
      // Database credentials
      $db_host = 'localhost';
      $db_user = 'charities';
      $db_pass = 'tSwM3cnV27gDFmdL';
      $db_name = 'charities';
      $table_name = 'charities';

      // Create a connection to the external database
      $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

      if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
      }

      // Query to fetch the data from the charities table
      $query = "SELECT name, address1, address2, address3, postcode, email, phone, web FROM $table_name";
      $result = $mysqli->query($query);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $params = array(
            'contact_type' => 'Organization',
            'organization_name' => $row['name'],
            'email' => array(
              'email' => $row['email'],
              'location_type_id' => 1, // assuming the default location type
            ),
            'phone' => array(
              'phone' => $row['phone'],
              'location_type_id' => 1,
            ),
            'address' => array(
              'location_type_id' => 1,
              'street_address' => $row['address1'] . ' ' . $row['address2'] . ' ' . $row['address3'],
              'postal_code' => $row['postcode'],
            ),
            'website' => array(
              'url' => $row['web'],
              'website_type_id' => 1, // assuming the default website type
            ),
          );

          try {
            civicrm_api3('Contact', 'create', $params);
          } catch (CiviCRM_API3_Exception $e) {
            // Handle API error
            $error = $e->getMessage();
            CRM_Core_Error::debug_log_message('Error creating contact: ' . $error);
          }
        }
      }

      $mysqli->close();
    }
  }
