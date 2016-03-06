<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sked Configuration
    |--------------------------------------------------------------------------
    |
    | These configs are used to automatically instatiate an instance of
    | Sked in the Service Provider.
    |
    */
    'data_connector' => [
        'name' => env('SKED_DC_NAME', 'PDO'),
        'options' => [
            'driver' => env('SKED_DC_DRIVER', 'mysql'),
            'host' => env('SKED_DC_HOST', 'localhost'),
            'dbname' => env('SKED_DC_DBNAME', 'homestead'),
            'user' => env('SKED_DC_USER', 'homestead'),
            'pass' => env('SKED_DC_PASS', 'secret'),
        ],
    ],

];
