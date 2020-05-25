<?php

/*
 * Settings metadata file
 */
return array(
  'googleCivicInformationAPIKey' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'googleCivicInformationAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Google Civic API Key',
    'help_text' => 'Add your registered Google Civic Information API Key for Open Civic Data API calls',
    'html_type' => 'text',
    'title' => ts('Google Civic Information API Key'),
  ),
  'proPublicaCongressAPIKey' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'proPublicaCongressAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'ProPublica Congress API Key',
    'help_text' => 'Add your registered ProPublica Congress API Key for API calls',
    'html_type' => 'text',
    'title' => ts('ProPublica Congress API Key'),
  ),
  'addressLocationType' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'addressLocationType',
    'type' => 'Integer',
    'default' => '1',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Address location for district lookup.',
    'help_text' => 'Select the address location type to use when looking up a contact\'s districts.',
    'html_type' => 'select',
    'title' => ts('Address location for district lookup'),
    'pseudoconstant' => [
      'callback' => 'CRM_Admin_Form_Setting_Electoral::getLocationTypes',
    ],
  ),
  'includedStatesProvinces' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedStatesProvinces',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'States and Provinces included in API calls',
    'help_text' => 'Add states and provinces to include in API scheduled jobs',    
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
    ],
    'title' => ts('States included in API calls'),
    'pseudoconstant' => [
      'callback' => 'CRM_Core_PseudoConstant::stateProvince',
    ],
  ),
  'includedCounties' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCounties',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Counties included in API calls',
    'help_text' => 'Add counties to include in API scheduled jobs',
    'html_type' => 'multiselect',
    'title' => ts('Counties included in the API calls'),
  ),
  'allCounties' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'allCounties',
    'type' => 'Boolean',
    'default' => '',
    'add' => '5.25',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Include all counties in API scheduled jobs',
    'help_text' => 'Include all counties in API scheduled jobs',
    'html_type' => 'checkbox',
    'title' => ts('All Counties'),
  ],
  'includedCities' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCities',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Cities included in API calls',
    'help_text' => 'Add cities, comma separated, to include in API scheduled jobs',
    'html_type' => 'text',
    'title' => ts('Cities included in API Calls'),
  ),
);
