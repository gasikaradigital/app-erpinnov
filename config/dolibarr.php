<?php
<<<<<<< HEAD

return [
    'domain_suffix' => env('DOLIBARR_DOMAIN_SUFFIX', '.base.erpinnov.com'),
    'zip_file_path' => env('DOLIBARR_ZIP_FILE_PATH', '/home/sc2sylg/erpinnov.com/database/dolibarr.zip'),
    'cpanel' => [
        'host' => env('CPANEL_HOST'),
        'user' => env('CPANEL_USER_NAME'),
        'password' => env('CPANEL_PASSWORD'),
        'token' => env('CPANEL_API_TOKEN'),
        'privileges' => env('CPANEL_PRIVILEGES'),
        'mysql_user' => env('CPANEL_MYSQL_USER'),
        'mysql_password' => env('CPANEL_MYSQL_PASSWORD'),
        'mysql_user_access' => env('CPANEL_MYSQL_USER_ACCESS'),
        'dbname_suffix' => env('CPANEL_DBNAME_SUFFIX'),
        'main_domain' => env('CPANEL_MAIN_DOMAIN'),
        'document_root' => env('CPANEL_DOCUMENT_ROOT'),
        'cpsess' => env('CPANEL_CPSESS'),
    ],
];


=======
return [
    'source_path' => 'C:\laragon\www\dolibarr',
    'instances_path' => 'C:\laragon\www\instances',
    'source_db' => 'dolibarr',
];
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
