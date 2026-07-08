<?php

  class CRM_CharityImport_Scheduler {

    public static function createJob() {
      $params = array(
        'name' => 'Charity Import',
        'description' => 'Imports organization contacts from the charities database',
        'run_frequency' => 'Daily',
        'api_entity' => 'job',
        'api_action' => 'charity_import',
        'is_active' => 1,
      );

      civicrm_api3('Job', 'create', $params);
    }

    public static function deleteJob() {
      $params = array(
        'name' => 'Charity Import',
      );

      civicrm_api3('Job', 'delete', $params);
    }
  }
