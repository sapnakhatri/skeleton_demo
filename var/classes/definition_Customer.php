<?php 

/** 
* Generated at: 2019-12-17T07:37:01+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- active [checkbox]
- gender [gender]
- firstname [firstname]
- lastname [lastname]
- company [input]
- email [email]
- phone [input]
- street [input]
- zip [input]
- city [input]
- countryCode [country]
- idEncoded [input]
- manualSegments [advancedManyToManyObjectRelation]
- calculatedSegments [advancedManyToManyObjectRelation]
- password [password]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '5',
   'name' => 'Customer',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1576564620,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '\\CustomerManagementFrameworkBundle\\Model\\AbstractCustomer\\DefaultAbstractUserawareCustomer',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'active',
                 'title' => 'Active',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Gender::__set_state(array(
                 'fieldtype' => 'gender',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'male',
                    'value' => 'male',
                  ),
                  1 => 
                  array (
                    'key' => 'female',
                    'value' => 'female',
                  ),
                  2 => 
                  array (
                    'key' => '',
                    'value' => 'unknown',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'gender',
                 'title' => 'Gender',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Firstname::__set_state(array(
                 'fieldtype' => 'firstname',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'firstname',
                 'title' => 'Firstname',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Lastname::__set_state(array(
                 'fieldtype' => 'lastname',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'lastname',
                 'title' => 'Lastname',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'company',
                 'title' => 'Company',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Email::__set_state(array(
                 'fieldtype' => 'email',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'email',
                 'title' => 'Email',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'phone',
                 'title' => 'phone',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              7 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'street',
                 'title' => 'Street',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'zip',
                 'title' => 'Zip',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              9 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'city',
                 'title' => 'City',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              10 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
                 'fieldtype' => 'country',
                 'restrictTo' => '',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Afghanistan',
                    'value' => 'AF',
                  ),
                  1 => 
                  array (
                    'key' => 'Albania',
                    'value' => 'AL',
                  ),
                  2 => 
                  array (
                    'key' => 'Algeria',
                    'value' => 'DZ',
                  ),
                  3 => 
                  array (
                    'key' => 'American Samoa',
                    'value' => 'AS',
                  ),
                  4 => 
                  array (
                    'key' => 'Andorra',
                    'value' => 'AD',
                  ),
                  5 => 
                  array (
                    'key' => 'Angola',
                    'value' => 'AO',
                  ),
                  6 => 
                  array (
                    'key' => 'Anguilla',
                    'value' => 'AI',
                  ),
                  7 => 
                  array (
                    'key' => 'Antarctica',
                    'value' => 'AQ',
                  ),
                  8 => 
                  array (
                    'key' => 'Antigua & Barbuda',
                    'value' => 'AG',
                  ),
                  9 => 
                  array (
                    'key' => 'Argentina',
                    'value' => 'AR',
                  ),
                  10 => 
                  array (
                    'key' => 'Armenia',
                    'value' => 'AM',
                  ),
                  11 => 
                  array (
                    'key' => 'Aruba',
                    'value' => 'AW',
                  ),
                  12 => 
                  array (
                    'key' => 'Ascension Island',
                    'value' => 'AC',
                  ),
                  13 => 
                  array (
                    'key' => 'Australia',
                    'value' => 'AU',
                  ),
                  14 => 
                  array (
                    'key' => 'Austria',
                    'value' => 'AT',
                  ),
                  15 => 
                  array (
                    'key' => 'Azerbaijan',
                    'value' => 'AZ',
                  ),
                  16 => 
                  array (
                    'key' => 'Bahamas',
                    'value' => 'BS',
                  ),
                  17 => 
                  array (
                    'key' => 'Bahrain',
                    'value' => 'BH',
                  ),
                  18 => 
                  array (
                    'key' => 'Bangladesh',
                    'value' => 'BD',
                  ),
                  19 => 
                  array (
                    'key' => 'Barbados',
                    'value' => 'BB',
                  ),
                  20 => 
                  array (
                    'key' => 'Belarus',
                    'value' => 'BY',
                  ),
                  21 => 
                  array (
                    'key' => 'Belgium',
                    'value' => 'BE',
                  ),
                  22 => 
                  array (
                    'key' => 'Belize',
                    'value' => 'BZ',
                  ),
                  23 => 
                  array (
                    'key' => 'Benin',
                    'value' => 'BJ',
                  ),
                  24 => 
                  array (
                    'key' => 'Bermuda',
                    'value' => 'BM',
                  ),
                  25 => 
                  array (
                    'key' => 'Bhutan',
                    'value' => 'BT',
                  ),
                  26 => 
                  array (
                    'key' => 'Bolivia',
                    'value' => 'BO',
                  ),
                  27 => 
                  array (
                    'key' => 'Bosnia & Herzegovina',
                    'value' => 'BA',
                  ),
                  28 => 
                  array (
                    'key' => 'Botswana',
                    'value' => 'BW',
                  ),
                  29 => 
                  array (
                    'key' => 'Brazil',
                    'value' => 'BR',
                  ),
                  30 => 
                  array (
                    'key' => 'British Indian Ocean Territory',
                    'value' => 'IO',
                  ),
                  31 => 
                  array (
                    'key' => 'British Virgin Islands',
                    'value' => 'VG',
                  ),
                  32 => 
                  array (
                    'key' => 'Brunei',
                    'value' => 'BN',
                  ),
                  33 => 
                  array (
                    'key' => 'Bulgaria',
                    'value' => 'BG',
                  ),
                  34 => 
                  array (
                    'key' => 'Burkina Faso',
                    'value' => 'BF',
                  ),
                  35 => 
                  array (
                    'key' => 'Burundi',
                    'value' => 'BI',
                  ),
                  36 => 
                  array (
                    'key' => 'Cambodia',
                    'value' => 'KH',
                  ),
                  37 => 
                  array (
                    'key' => 'Cameroon',
                    'value' => 'CM',
                  ),
                  38 => 
                  array (
                    'key' => 'Canada',
                    'value' => 'CA',
                  ),
                  39 => 
                  array (
                    'key' => 'Canary Islands',
                    'value' => 'IC',
                  ),
                  40 => 
                  array (
                    'key' => 'Cape Verde',
                    'value' => 'CV',
                  ),
                  41 => 
                  array (
                    'key' => 'Caribbean Netherlands',
                    'value' => 'BQ',
                  ),
                  42 => 
                  array (
                    'key' => 'Cayman Islands',
                    'value' => 'KY',
                  ),
                  43 => 
                  array (
                    'key' => 'Central African Republic',
                    'value' => 'CF',
                  ),
                  44 => 
                  array (
                    'key' => 'Ceuta & Melilla',
                    'value' => 'EA',
                  ),
                  45 => 
                  array (
                    'key' => 'Chad',
                    'value' => 'TD',
                  ),
                  46 => 
                  array (
                    'key' => 'Chile',
                    'value' => 'CL',
                  ),
                  47 => 
                  array (
                    'key' => 'China',
                    'value' => 'CN',
                  ),
                  48 => 
                  array (
                    'key' => 'Christmas Island',
                    'value' => 'CX',
                  ),
                  49 => 
                  array (
                    'key' => 'Cocos (Keeling) Islands',
                    'value' => 'CC',
                  ),
                  50 => 
                  array (
                    'key' => 'Colombia',
                    'value' => 'CO',
                  ),
                  51 => 
                  array (
                    'key' => 'Comoros',
                    'value' => 'KM',
                  ),
                  52 => 
                  array (
                    'key' => 'Congo - Brazzaville',
                    'value' => 'CG',
                  ),
                  53 => 
                  array (
                    'key' => 'Congo - Kinshasa',
                    'value' => 'CD',
                  ),
                  54 => 
                  array (
                    'key' => 'Cook Islands',
                    'value' => 'CK',
                  ),
                  55 => 
                  array (
                    'key' => 'Costa Rica',
                    'value' => 'CR',
                  ),
                  56 => 
                  array (
                    'key' => 'Croatia',
                    'value' => 'HR',
                  ),
                  57 => 
                  array (
                    'key' => 'Cuba',
                    'value' => 'CU',
                  ),
                  58 => 
                  array (
                    'key' => 'Curaçao',
                    'value' => 'CW',
                  ),
                  59 => 
                  array (
                    'key' => 'Cyprus',
                    'value' => 'CY',
                  ),
                  60 => 
                  array (
                    'key' => 'Czechia',
                    'value' => 'CZ',
                  ),
                  61 => 
                  array (
                    'key' => 'Côte d’Ivoire',
                    'value' => 'CI',
                  ),
                  62 => 
                  array (
                    'key' => 'Denmark',
                    'value' => 'DK',
                  ),
                  63 => 
                  array (
                    'key' => 'Diego Garcia',
                    'value' => 'DG',
                  ),
                  64 => 
                  array (
                    'key' => 'Djibouti',
                    'value' => 'DJ',
                  ),
                  65 => 
                  array (
                    'key' => 'Dominica',
                    'value' => 'DM',
                  ),
                  66 => 
                  array (
                    'key' => 'Dominican Republic',
                    'value' => 'DO',
                  ),
                  67 => 
                  array (
                    'key' => 'Ecuador',
                    'value' => 'EC',
                  ),
                  68 => 
                  array (
                    'key' => 'Egypt',
                    'value' => 'EG',
                  ),
                  69 => 
                  array (
                    'key' => 'El Salvador',
                    'value' => 'SV',
                  ),
                  70 => 
                  array (
                    'key' => 'Equatorial Guinea',
                    'value' => 'GQ',
                  ),
                  71 => 
                  array (
                    'key' => 'Eritrea',
                    'value' => 'ER',
                  ),
                  72 => 
                  array (
                    'key' => 'Estonia',
                    'value' => 'EE',
                  ),
                  73 => 
                  array (
                    'key' => 'Eswatini',
                    'value' => 'SZ',
                  ),
                  74 => 
                  array (
                    'key' => 'Ethiopia',
                    'value' => 'ET',
                  ),
                  75 => 
                  array (
                    'key' => 'Falkland Islands',
                    'value' => 'FK',
                  ),
                  76 => 
                  array (
                    'key' => 'Faroe Islands',
                    'value' => 'FO',
                  ),
                  77 => 
                  array (
                    'key' => 'Fiji',
                    'value' => 'FJ',
                  ),
                  78 => 
                  array (
                    'key' => 'Finland',
                    'value' => 'FI',
                  ),
                  79 => 
                  array (
                    'key' => 'France',
                    'value' => 'FR',
                  ),
                  80 => 
                  array (
                    'key' => 'French Guiana',
                    'value' => 'GF',
                  ),
                  81 => 
                  array (
                    'key' => 'French Polynesia',
                    'value' => 'PF',
                  ),
                  82 => 
                  array (
                    'key' => 'French Southern Territories',
                    'value' => 'TF',
                  ),
                  83 => 
                  array (
                    'key' => 'Gabon',
                    'value' => 'GA',
                  ),
                  84 => 
                  array (
                    'key' => 'Gambia',
                    'value' => 'GM',
                  ),
                  85 => 
                  array (
                    'key' => 'Georgia',
                    'value' => 'GE',
                  ),
                  86 => 
                  array (
                    'key' => 'Germany',
                    'value' => 'DE',
                  ),
                  87 => 
                  array (
                    'key' => 'Ghana',
                    'value' => 'GH',
                  ),
                  88 => 
                  array (
                    'key' => 'Gibraltar',
                    'value' => 'GI',
                  ),
                  89 => 
                  array (
                    'key' => 'Greece',
                    'value' => 'GR',
                  ),
                  90 => 
                  array (
                    'key' => 'Greenland',
                    'value' => 'GL',
                  ),
                  91 => 
                  array (
                    'key' => 'Grenada',
                    'value' => 'GD',
                  ),
                  92 => 
                  array (
                    'key' => 'Guadeloupe',
                    'value' => 'GP',
                  ),
                  93 => 
                  array (
                    'key' => 'Guam',
                    'value' => 'GU',
                  ),
                  94 => 
                  array (
                    'key' => 'Guatemala',
                    'value' => 'GT',
                  ),
                  95 => 
                  array (
                    'key' => 'Guernsey',
                    'value' => 'GG',
                  ),
                  96 => 
                  array (
                    'key' => 'Guinea',
                    'value' => 'GN',
                  ),
                  97 => 
                  array (
                    'key' => 'Guinea-Bissau',
                    'value' => 'GW',
                  ),
                  98 => 
                  array (
                    'key' => 'Guyana',
                    'value' => 'GY',
                  ),
                  99 => 
                  array (
                    'key' => 'Haiti',
                    'value' => 'HT',
                  ),
                  100 => 
                  array (
                    'key' => 'Honduras',
                    'value' => 'HN',
                  ),
                  101 => 
                  array (
                    'key' => 'Hong Kong SAR China',
                    'value' => 'HK',
                  ),
                  102 => 
                  array (
                    'key' => 'Hungary',
                    'value' => 'HU',
                  ),
                  103 => 
                  array (
                    'key' => 'Iceland',
                    'value' => 'IS',
                  ),
                  104 => 
                  array (
                    'key' => 'India',
                    'value' => 'IN',
                  ),
                  105 => 
                  array (
                    'key' => 'Indonesia',
                    'value' => 'ID',
                  ),
                  106 => 
                  array (
                    'key' => 'Iran',
                    'value' => 'IR',
                  ),
                  107 => 
                  array (
                    'key' => 'Iraq',
                    'value' => 'IQ',
                  ),
                  108 => 
                  array (
                    'key' => 'Ireland',
                    'value' => 'IE',
                  ),
                  109 => 
                  array (
                    'key' => 'Isle of Man',
                    'value' => 'IM',
                  ),
                  110 => 
                  array (
                    'key' => 'Israel',
                    'value' => 'IL',
                  ),
                  111 => 
                  array (
                    'key' => 'Italy',
                    'value' => 'IT',
                  ),
                  112 => 
                  array (
                    'key' => 'Jamaica',
                    'value' => 'JM',
                  ),
                  113 => 
                  array (
                    'key' => 'Japan',
                    'value' => 'JP',
                  ),
                  114 => 
                  array (
                    'key' => 'Jersey',
                    'value' => 'JE',
                  ),
                  115 => 
                  array (
                    'key' => 'Jordan',
                    'value' => 'JO',
                  ),
                  116 => 
                  array (
                    'key' => 'Kazakhstan',
                    'value' => 'KZ',
                  ),
                  117 => 
                  array (
                    'key' => 'Kenya',
                    'value' => 'KE',
                  ),
                  118 => 
                  array (
                    'key' => 'Kiribati',
                    'value' => 'KI',
                  ),
                  119 => 
                  array (
                    'key' => 'Kosovo',
                    'value' => 'XK',
                  ),
                  120 => 
                  array (
                    'key' => 'Kuwait',
                    'value' => 'KW',
                  ),
                  121 => 
                  array (
                    'key' => 'Kyrgyzstan',
                    'value' => 'KG',
                  ),
                  122 => 
                  array (
                    'key' => 'Laos',
                    'value' => 'LA',
                  ),
                  123 => 
                  array (
                    'key' => 'Latvia',
                    'value' => 'LV',
                  ),
                  124 => 
                  array (
                    'key' => 'Lebanon',
                    'value' => 'LB',
                  ),
                  125 => 
                  array (
                    'key' => 'Lesotho',
                    'value' => 'LS',
                  ),
                  126 => 
                  array (
                    'key' => 'Liberia',
                    'value' => 'LR',
                  ),
                  127 => 
                  array (
                    'key' => 'Libya',
                    'value' => 'LY',
                  ),
                  128 => 
                  array (
                    'key' => 'Liechtenstein',
                    'value' => 'LI',
                  ),
                  129 => 
                  array (
                    'key' => 'Lithuania',
                    'value' => 'LT',
                  ),
                  130 => 
                  array (
                    'key' => 'Luxembourg',
                    'value' => 'LU',
                  ),
                  131 => 
                  array (
                    'key' => 'Macao SAR China',
                    'value' => 'MO',
                  ),
                  132 => 
                  array (
                    'key' => 'Madagascar',
                    'value' => 'MG',
                  ),
                  133 => 
                  array (
                    'key' => 'Malawi',
                    'value' => 'MW',
                  ),
                  134 => 
                  array (
                    'key' => 'Malaysia',
                    'value' => 'MY',
                  ),
                  135 => 
                  array (
                    'key' => 'Maldives',
                    'value' => 'MV',
                  ),
                  136 => 
                  array (
                    'key' => 'Mali',
                    'value' => 'ML',
                  ),
                  137 => 
                  array (
                    'key' => 'Malta',
                    'value' => 'MT',
                  ),
                  138 => 
                  array (
                    'key' => 'Marshall Islands',
                    'value' => 'MH',
                  ),
                  139 => 
                  array (
                    'key' => 'Martinique',
                    'value' => 'MQ',
                  ),
                  140 => 
                  array (
                    'key' => 'Mauritania',
                    'value' => 'MR',
                  ),
                  141 => 
                  array (
                    'key' => 'Mauritius',
                    'value' => 'MU',
                  ),
                  142 => 
                  array (
                    'key' => 'Mayotte',
                    'value' => 'YT',
                  ),
                  143 => 
                  array (
                    'key' => 'Mexico',
                    'value' => 'MX',
                  ),
                  144 => 
                  array (
                    'key' => 'Micronesia',
                    'value' => 'FM',
                  ),
                  145 => 
                  array (
                    'key' => 'Moldova',
                    'value' => 'MD',
                  ),
                  146 => 
                  array (
                    'key' => 'Monaco',
                    'value' => 'MC',
                  ),
                  147 => 
                  array (
                    'key' => 'Mongolia',
                    'value' => 'MN',
                  ),
                  148 => 
                  array (
                    'key' => 'Montenegro',
                    'value' => 'ME',
                  ),
                  149 => 
                  array (
                    'key' => 'Montserrat',
                    'value' => 'MS',
                  ),
                  150 => 
                  array (
                    'key' => 'Morocco',
                    'value' => 'MA',
                  ),
                  151 => 
                  array (
                    'key' => 'Mozambique',
                    'value' => 'MZ',
                  ),
                  152 => 
                  array (
                    'key' => 'Myanmar (Burma)',
                    'value' => 'MM',
                  ),
                  153 => 
                  array (
                    'key' => 'Namibia',
                    'value' => 'NA',
                  ),
                  154 => 
                  array (
                    'key' => 'Nauru',
                    'value' => 'NR',
                  ),
                  155 => 
                  array (
                    'key' => 'Nepal',
                    'value' => 'NP',
                  ),
                  156 => 
                  array (
                    'key' => 'Netherlands',
                    'value' => 'NL',
                  ),
                  157 => 
                  array (
                    'key' => 'New Caledonia',
                    'value' => 'NC',
                  ),
                  158 => 
                  array (
                    'key' => 'New Zealand',
                    'value' => 'NZ',
                  ),
                  159 => 
                  array (
                    'key' => 'Nicaragua',
                    'value' => 'NI',
                  ),
                  160 => 
                  array (
                    'key' => 'Niger',
                    'value' => 'NE',
                  ),
                  161 => 
                  array (
                    'key' => 'Nigeria',
                    'value' => 'NG',
                  ),
                  162 => 
                  array (
                    'key' => 'Niue',
                    'value' => 'NU',
                  ),
                  163 => 
                  array (
                    'key' => 'Norfolk Island',
                    'value' => 'NF',
                  ),
                  164 => 
                  array (
                    'key' => 'North Korea',
                    'value' => 'KP',
                  ),
                  165 => 
                  array (
                    'key' => 'North Macedonia',
                    'value' => 'MK',
                  ),
                  166 => 
                  array (
                    'key' => 'Northern Mariana Islands',
                    'value' => 'MP',
                  ),
                  167 => 
                  array (
                    'key' => 'Norway',
                    'value' => 'NO',
                  ),
                  168 => 
                  array (
                    'key' => 'Oman',
                    'value' => 'OM',
                  ),
                  169 => 
                  array (
                    'key' => 'Pakistan',
                    'value' => 'PK',
                  ),
                  170 => 
                  array (
                    'key' => 'Palau',
                    'value' => 'PW',
                  ),
                  171 => 
                  array (
                    'key' => 'Palestinian Territories',
                    'value' => 'PS',
                  ),
                  172 => 
                  array (
                    'key' => 'Panama',
                    'value' => 'PA',
                  ),
                  173 => 
                  array (
                    'key' => 'Papua New Guinea',
                    'value' => 'PG',
                  ),
                  174 => 
                  array (
                    'key' => 'Paraguay',
                    'value' => 'PY',
                  ),
                  175 => 
                  array (
                    'key' => 'Peru',
                    'value' => 'PE',
                  ),
                  176 => 
                  array (
                    'key' => 'Philippines',
                    'value' => 'PH',
                  ),
                  177 => 
                  array (
                    'key' => 'Pitcairn Islands',
                    'value' => 'PN',
                  ),
                  178 => 
                  array (
                    'key' => 'Poland',
                    'value' => 'PL',
                  ),
                  179 => 
                  array (
                    'key' => 'Portugal',
                    'value' => 'PT',
                  ),
                  180 => 
                  array (
                    'key' => 'Pseudo-Accents',
                    'value' => 'XA',
                  ),
                  181 => 
                  array (
                    'key' => 'Pseudo-Bidi',
                    'value' => 'XB',
                  ),
                  182 => 
                  array (
                    'key' => 'Puerto Rico',
                    'value' => 'PR',
                  ),
                  183 => 
                  array (
                    'key' => 'Qatar',
                    'value' => 'QA',
                  ),
                  184 => 
                  array (
                    'key' => 'Romania',
                    'value' => 'RO',
                  ),
                  185 => 
                  array (
                    'key' => 'Russia',
                    'value' => 'RU',
                  ),
                  186 => 
                  array (
                    'key' => 'Rwanda',
                    'value' => 'RW',
                  ),
                  187 => 
                  array (
                    'key' => 'Réunion',
                    'value' => 'RE',
                  ),
                  188 => 
                  array (
                    'key' => 'Samoa',
                    'value' => 'WS',
                  ),
                  189 => 
                  array (
                    'key' => 'San Marino',
                    'value' => 'SM',
                  ),
                  190 => 
                  array (
                    'key' => 'Saudi Arabia',
                    'value' => 'SA',
                  ),
                  191 => 
                  array (
                    'key' => 'Senegal',
                    'value' => 'SN',
                  ),
                  192 => 
                  array (
                    'key' => 'Serbia',
                    'value' => 'RS',
                  ),
                  193 => 
                  array (
                    'key' => 'Seychelles',
                    'value' => 'SC',
                  ),
                  194 => 
                  array (
                    'key' => 'Sierra Leone',
                    'value' => 'SL',
                  ),
                  195 => 
                  array (
                    'key' => 'Singapore',
                    'value' => 'SG',
                  ),
                  196 => 
                  array (
                    'key' => 'Sint Maarten',
                    'value' => 'SX',
                  ),
                  197 => 
                  array (
                    'key' => 'Slovakia',
                    'value' => 'SK',
                  ),
                  198 => 
                  array (
                    'key' => 'Slovenia',
                    'value' => 'SI',
                  ),
                  199 => 
                  array (
                    'key' => 'Solomon Islands',
                    'value' => 'SB',
                  ),
                  200 => 
                  array (
                    'key' => 'Somalia',
                    'value' => 'SO',
                  ),
                  201 => 
                  array (
                    'key' => 'South Africa',
                    'value' => 'ZA',
                  ),
                  202 => 
                  array (
                    'key' => 'South Georgia & South Sandwich Islands',
                    'value' => 'GS',
                  ),
                  203 => 
                  array (
                    'key' => 'South Korea',
                    'value' => 'KR',
                  ),
                  204 => 
                  array (
                    'key' => 'South Sudan',
                    'value' => 'SS',
                  ),
                  205 => 
                  array (
                    'key' => 'Spain',
                    'value' => 'ES',
                  ),
                  206 => 
                  array (
                    'key' => 'Sri Lanka',
                    'value' => 'LK',
                  ),
                  207 => 
                  array (
                    'key' => 'St. Barthélemy',
                    'value' => 'BL',
                  ),
                  208 => 
                  array (
                    'key' => 'St. Helena',
                    'value' => 'SH',
                  ),
                  209 => 
                  array (
                    'key' => 'St. Kitts & Nevis',
                    'value' => 'KN',
                  ),
                  210 => 
                  array (
                    'key' => 'St. Lucia',
                    'value' => 'LC',
                  ),
                  211 => 
                  array (
                    'key' => 'St. Martin',
                    'value' => 'MF',
                  ),
                  212 => 
                  array (
                    'key' => 'St. Pierre & Miquelon',
                    'value' => 'PM',
                  ),
                  213 => 
                  array (
                    'key' => 'St. Vincent & Grenadines',
                    'value' => 'VC',
                  ),
                  214 => 
                  array (
                    'key' => 'Sudan',
                    'value' => 'SD',
                  ),
                  215 => 
                  array (
                    'key' => 'Suriname',
                    'value' => 'SR',
                  ),
                  216 => 
                  array (
                    'key' => 'Svalbard & Jan Mayen',
                    'value' => 'SJ',
                  ),
                  217 => 
                  array (
                    'key' => 'Sweden',
                    'value' => 'SE',
                  ),
                  218 => 
                  array (
                    'key' => 'Switzerland',
                    'value' => 'CH',
                  ),
                  219 => 
                  array (
                    'key' => 'Syria',
                    'value' => 'SY',
                  ),
                  220 => 
                  array (
                    'key' => 'São Tomé & Príncipe',
                    'value' => 'ST',
                  ),
                  221 => 
                  array (
                    'key' => 'Taiwan',
                    'value' => 'TW',
                  ),
                  222 => 
                  array (
                    'key' => 'Tajikistan',
                    'value' => 'TJ',
                  ),
                  223 => 
                  array (
                    'key' => 'Tanzania',
                    'value' => 'TZ',
                  ),
                  224 => 
                  array (
                    'key' => 'Thailand',
                    'value' => 'TH',
                  ),
                  225 => 
                  array (
                    'key' => 'Timor-Leste',
                    'value' => 'TL',
                  ),
                  226 => 
                  array (
                    'key' => 'Togo',
                    'value' => 'TG',
                  ),
                  227 => 
                  array (
                    'key' => 'Tokelau',
                    'value' => 'TK',
                  ),
                  228 => 
                  array (
                    'key' => 'Tonga',
                    'value' => 'TO',
                  ),
                  229 => 
                  array (
                    'key' => 'Trinidad & Tobago',
                    'value' => 'TT',
                  ),
                  230 => 
                  array (
                    'key' => 'Tristan da Cunha',
                    'value' => 'TA',
                  ),
                  231 => 
                  array (
                    'key' => 'Tunisia',
                    'value' => 'TN',
                  ),
                  232 => 
                  array (
                    'key' => 'Turkey',
                    'value' => 'TR',
                  ),
                  233 => 
                  array (
                    'key' => 'Turkmenistan',
                    'value' => 'TM',
                  ),
                  234 => 
                  array (
                    'key' => 'Turks & Caicos Islands',
                    'value' => 'TC',
                  ),
                  235 => 
                  array (
                    'key' => 'Tuvalu',
                    'value' => 'TV',
                  ),
                  236 => 
                  array (
                    'key' => 'U.S. Outlying Islands',
                    'value' => 'UM',
                  ),
                  237 => 
                  array (
                    'key' => 'U.S. Virgin Islands',
                    'value' => 'VI',
                  ),
                  238 => 
                  array (
                    'key' => 'Uganda',
                    'value' => 'UG',
                  ),
                  239 => 
                  array (
                    'key' => 'Ukraine',
                    'value' => 'UA',
                  ),
                  240 => 
                  array (
                    'key' => 'United Arab Emirates',
                    'value' => 'AE',
                  ),
                  241 => 
                  array (
                    'key' => 'United Kingdom',
                    'value' => 'GB',
                  ),
                  242 => 
                  array (
                    'key' => 'United States',
                    'value' => 'US',
                  ),
                  243 => 
                  array (
                    'key' => 'Uruguay',
                    'value' => 'UY',
                  ),
                  244 => 
                  array (
                    'key' => 'Uzbekistan',
                    'value' => 'UZ',
                  ),
                  245 => 
                  array (
                    'key' => 'Vanuatu',
                    'value' => 'VU',
                  ),
                  246 => 
                  array (
                    'key' => 'Vatican City',
                    'value' => 'VA',
                  ),
                  247 => 
                  array (
                    'key' => 'Venezuela',
                    'value' => 'VE',
                  ),
                  248 => 
                  array (
                    'key' => 'Vietnam',
                    'value' => 'VN',
                  ),
                  249 => 
                  array (
                    'key' => 'Wallis & Futuna',
                    'value' => 'WF',
                  ),
                  250 => 
                  array (
                    'key' => 'Western Sahara',
                    'value' => 'EH',
                  ),
                  251 => 
                  array (
                    'key' => 'Yemen',
                    'value' => 'YE',
                  ),
                  252 => 
                  array (
                    'key' => 'Zambia',
                    'value' => 'ZM',
                  ),
                  253 => 
                  array (
                    'key' => 'Zimbabwe',
                    'value' => 'ZW',
                  ),
                  254 => 
                  array (
                    'key' => 'Åland Islands',
                    'value' => 'AX',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'countryCode',
                 'title' => 'Country',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              11 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'idEncoded',
                 'title' => 'Id Encoded',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'name' => 'Segmentation',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => NULL,
                 'visibleFields' => NULL,
                 'columns' => 
                array (
                ),
                 'columnKeys' => 
                array (
                ),
                 'fieldtype' => 'advancedManyToManyObjectRelation',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'relationType' => true,
                 'optimizedAdminLoading' => false,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'name' => 'manualSegments',
                 'title' => 'Manual Segments',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => NULL,
                 'visibleFields' => NULL,
                 'columns' => 
                array (
                ),
                 'columnKeys' => 
                array (
                ),
                 'fieldtype' => 'advancedManyToManyObjectRelation',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'relationType' => true,
                 'optimizedAdminLoading' => false,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'name' => 'calculatedSegments',
                 'title' => 'Calculated Segments',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'name' => 'Authentication',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                 'fieldtype' => 'password',
                 'width' => '',
                 'queryColumnType' => 'varchar(190)',
                 'columnType' => 'varchar(190)',
                 'phpdocType' => 'string',
                 'algorithm' => 'password_hash',
                 'salt' => '',
                 'saltlocation' => 'back',
                 'name' => 'password',
                 'title' => 'password',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'icon' => '/bundles/pimcorecustomermanagementframework/icons/customer.svg',
   'previewUrl' => '',
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
