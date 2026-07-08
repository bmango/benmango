<?php

class CRM_Charityimporter_Page_Import extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(ts('UK Charity Data Import'));

    // Handle form submission
    if ($_POST['submit_import']) {
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
      // Connect to charity database (adjust connection details as needed)
      $charityDb = new PDO(
        'mysql:host=localhost;dbname=benmang1_charities',
        'benmang1_benmango8',
        '9Zq76twa667P'
      );

      $stmt = $charityDb->query("SELECT COUNT(*) as total FROM charities WHERE reg_status <> 'RM'");
      $total = $stmt->fetch()['total'];

      // Check how many are already imported
      $stmt = $charityDb->query("
        SELECT COUNT(*) as imported 
        FROM charities c 
        WHERE EXISTS (
          SELECT 1 FROM benmang1_benmango8_civi.civicrm_contact cc 
          WHERE cc.external_identifier = c.reg
        )
      ");
      $imported = $stmt->fetch()['imported'];

      return [
        'total' => $total,
        'imported' => $imported,
        'remaining' => $total - $imported
      ];
    } catch (Exception $e) {
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