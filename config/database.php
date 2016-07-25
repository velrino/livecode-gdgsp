<?php

return [

    'default' => 'mongodb',

    'connections' => [

      'mongodb' => array
      (
          'driver'   => 'mongodb',
          'host' => env('MONGO_ENV_HOST', 'e246e416bc70'),
          'port'     => env('MONGO_ENV_PORT', 27017),
          'database' => env('MONGO_ENV_DATABASE', 'livecode'),
          'username' => env('MONGO_ENV_USERNAME', ''),
          'password' => env('MONGO_ENV_PASSWORD', '')

      ),

    ],

    'migrations' => 'migrations',
];
