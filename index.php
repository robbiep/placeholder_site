<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function ($app) {
    render('index_backup.php')
});

$app->run();
