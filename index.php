<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
  'templates.path' => './views'
));

$app->get('/', function() use ($app) {
  $app->render('header.php');
  $app->render('menu.php');
  $app->render('main.php');
});

$app->get('/blog', function() use ($app) {
  $app->render('header.php');
  $app->render('menu.php');
  $app->render('blog.php');
});

$app->get('/contact', function() use ($app) {
  $app->render('header.php');
  $app->render('menu.php');
  $app->render('contact.php');
});

$app->run();
