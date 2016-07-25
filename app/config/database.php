<?php

'default' => env('DB_CONNECTION', 'mongodb'),

'mongodb' =>
    [
    'driver'   => 'mongodb',
    'host'     => env('DB_HOST', 'e246e416bc70'),
    'port'     => env('DB_PORT', 27017),
    'database' => env('DB_DATABASE', 'livecode'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    ]
],
