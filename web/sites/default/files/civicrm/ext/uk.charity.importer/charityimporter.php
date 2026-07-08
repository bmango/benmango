<?php

/**
 * Implements hook_civicrm_config().
 */
function charityimporter_civicrm_config(&$config) {
  $template =& CRM_Core_Smarty::singleton();
  $extRoot = dirname(__FILE__) . DIRECTORY_SEPARATOR;
  $extDir = $extRoot . 'templates';

  if (is_dir($extDir)) {
    $template->addTemplateDir($extDir);
  }

  $include_path = $extRoot . PATH_SEPARATOR . get_include_path();
  set_include_path($include_path);
}

/**
 * Implements hook_civicrm_install().
 */
function charityimporter_civicrm_install() {
  // Installation logic if needed
}

/**
 * Implements hook_civicrm_enable().
 */
function charityimporter_civicrm_enable() {
  // Clear menu cache when enabled
  CRM_Core_Menu::store();
}

/**
 * Implements hook_civicrm_xmlMenu().
 */
function charityimporter_civicrm_xmlMenu(&$files) {
  $files[] = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'xml' . DIRECTORY_SEPARATOR . 'Menu' . DIRECTORY_SEPARATOR . 'charity.xml';
}

/**
 * Implements hook_civicrm_navigationMenu().
 */
function charityimporter_civicrm_navigationMenu(&$menu) {
  $maxNavID = 1;
  array_walk_recursive($menu, function($item, $key) use (&$maxNavID) {
    if ($key === 'navID') {
      $maxNavID = max($maxNavID, $item);
    }
  });

  // Find the "Administer" menu
  foreach ($menu as &$adminMenu) {
    if ($adminMenu['attributes']['name'] == 'Administer') {
      if (isset($adminMenu['child'])) {
        // Find "System Data" submenu
        foreach ($adminMenu['child'] as &$systemDataMenu) {
          if ($systemDataMenu['attributes']['name'] == 'System Data') {
            // Add our menu item
            $systemDataMenu['child']['charity_import'] = [
              'attributes' => [
                'label' => ts('Import UK Charities'),
                'name' => 'charity_import',
                'url' => 'civicrm/charity/import',
                'permission' => 'administer CiviCRM',
                'operator' => 'OR',
                'separator' => 0,
                'parentID' => $systemDataMenu['attributes']['navID'],
                'navID' => ++$maxNavID,
                'active' => 1
              ]
            ];
            break;
          }
        }
      }
      break;
    }
  }
}