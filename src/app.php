<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => array(__DIR__ . '/views'),
    'twig.options' => array('cache' => __DIR__ . '/../cache/twig'),
));

$app['debug'] = true;
$app['db_file'] = '../data/database.json';

return $app;
