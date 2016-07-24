<?php

$app->register('Dingo\Api\Provider\LumenServiceProvider');

$api = $app['api.router'];

$api->version('v1', function ($api) use ($app) {

  $api->get('/', function () use ($api)
  {
    return ["Projec" => "Livecode"];
  });

});
