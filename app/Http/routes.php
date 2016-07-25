<?php

$app->register('Dingo\Api\Provider\LumenServiceProvider');

$api = $app['api.router'];

$api->version('v1', function ($api) use ($app) {

  $api->group(['namespace' => 'App\Http\Controllers'], function ($api)
  {
    $api->get('/', ['uses' => 'LivecodeController@project']);

    $api->group(['prefix' => 'users'], function ($api)
    {
        $api->get('/', ['uses' => 'LivecodeController@list']);
        $api->post('/', ['uses' => 'LivecodeController@insert']);

        $api->group(['prefix' => '{document:[0-9]+}'], function ($api)
        {
            $api->get('/', ['uses' => 'LivecodeController@get']);
            $api->put('/', ['uses' => 'LivecodeController@update']);
            $api->delete('/', ['uses' => 'LivecodeController@delete']);
        });

    });
  });

});
