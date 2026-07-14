<?php
  // 1. Bootstrap CiviCRM inside Drush
  //\civicrm_initialize();
  \Drupal::service('civicrm')->initialize();

  // 2. Read limit and offset arguments passed from the CLI
  // Drush scr passes trailing arguments into a global $extra array
  $limit  = isset($extra[0]) ? (int)$extra[0] : 1000;
  $offset = isset($extra[1]) ? (int)$extra[1] : 0;

  // 3. Instantiate your custom CiviCRM extension class
  // TODO: Update this class name to match your actual extension class!

  // TODO: Replace 'your.extension.key' with the actual key from your extension's info.xml
  $extPath = \CRM_Extension_System::singleton()->getMapper()->keyToBasePath('uk.charity.importer');
  require_once $extPath . '/CRM/Charityimporter/BAO/CharityImporter.php';

  $importer = new \CRM_Charityimporter_BAO_CharityImporter();

  print "🤖 Running batch: Offset {$offset} | Limit {$limit}...\n";

  // 4. Run the import
  $stats = $importer->importCharities($limit, $offset);

  print "📊 Batch results: Processed {$stats['processed']} | Created {$stats['created']} | Updated {$stats['updated']} | Errors {$stats['errors']}\n";

  // 5. Signal the bash script if we are completely finished
  if ($stats['processed'] === 0 && $stats['errors'] === 0) {
    print "🎉 FINISHED\n";
  }
