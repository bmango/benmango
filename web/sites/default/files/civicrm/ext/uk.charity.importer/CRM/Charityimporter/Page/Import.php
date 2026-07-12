<?php

class CRM_Charityimporter_Page_Import extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(ts('UK Charity Data Import'));

    // Handle form submission
    if (isset($_POST['submit_import'])) {
      $this->processImport();
    }

    $this->assign('importStats', $this->getImportStats());
    parent::run();
  }

  /**
   * Get statistics about the import data
   */
  private function getImportStats() {
    try {
      // Initialize charity database connection
      // 1. Fetch the credentials you defined in your settings files
      $db_info = \Drupal\Core\Database\Database::getConnectionInfo('charities')['default'];

      // 2. Inject those dynamic credentials into your PDO instance
      $this->charityDb = new \PDO(
        "mysql:host={$db_info['host']};dbname={$db_info['database']};port={$db_info['port']}",
        $db_info['username'],
        $db_info['password'],
        [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
      );

      // Replaced $charityDb with $this->charityDb
      $stmt = $this->charityDb->query("SELECT COUNT(*) as total FROM charities WHERE reg_status <> 'RM'");
      $total = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];

      // Replaced $charityDb with $this->charityDb
      $stmt = $this->charityDb->query("
      SELECT COUNT(*) as imported
      FROM charities c
      WHERE EXISTS (
        SELECT 1 FROM benmang1_benmango8_civi.civicrm_contact cc
        WHERE cc.external_identifier = c.reg
      )
    ");
      $imported = $stmt->fetch(\PDO::FETCH_ASSOC)['imported'];

      return [
        'total' => $total,
        'imported' => $imported,
        'remaining' => $total - $imported
      ];
    } catch (\Exception $e) { // Added leading backslash to target the global Exception class
      return ['error' => $e->getMessage()];
    }
  }

  /**
   * Process the charity import
   */
  private function processImport() {
    $batchSize = CRM_Utils_Request::retrieve('batch_size', 'Integer', $this, FALSE, 100);
    $startFrom = CRM_Utils_Request::retrieve('start_from', 'Integer', $this, FALSE, 0);

    try {
      $importer = new CRM_Charityimporter_BAO_CharityImporter();
      $result = $importer->importCharities($batchSize, $startFrom);

      CRM_Core_Session::setStatus(
        ts('Successfully processed %1 records. %2 created, %3 updated, %4 errors.', [
          1 => $result['processed'],
          2 => $result['created'],
          3 => $result['updated'],
          4 => $result['errors']
        ]),
        ts('Import Complete'),
        'success'
      );
    } catch (Exception $e) {
      CRM_Core_Session::setStatus($e->getMessage(), ts('Import Error'), 'error');
    }
  }
}
