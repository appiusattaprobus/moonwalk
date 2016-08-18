<?php

$app->match('/', function () use ($app) {
    return $app['twig']->render(
        'index.html.twig', 
        array(
            'list' => json_decode(file_get_contents($app['db_file']))
        )
    );
}, 'GET');

$app->match('/watch/{id}', function($id) use ($app) {
    return $app['twig']->render(
        'watch.html.twig', 
        array(
            'item' => json_decode(file_get_contents($app['db_file']))[$id]
        )
    );
}, 'GET');
