<?php

  require_once 'CRM/CharityImport/Import.php';
  require_once 'CRM/CharityImport/Scheduler.php';

  function org_civicrm_charityimport_civicrm_install() {
    CRM_CharityImport_Scheduler::createJob();
  }

  function org_civicrm_charityimport_civicrm_uninstall() {
    CRM_CharityImport_Scheduler::deleteJob();
  }

  function org_civicrm_charityimport_civicrm_config(&$config) {
    _org_civicrm_charityimport_civix_civicrm_config($config);
  }

  function org_civicrm_charityimport_civicrm_xmlMenu(&$files) {
    _org_civicrm_charityimport_civix_civicrm_xmlMenu($files);
  }
