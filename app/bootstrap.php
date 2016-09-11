<?php

session_start();

// Autoloader
require '../vendor/autoload.php';

// Config
$config = array(
    'templates.path' => "../app/Views/",
    'debug' => false
);

// Eloquent
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(array(
    'driver'    => '',
    'host'      => '',
    'database'  => '',
    'username'  => '',
    'password'  => '',
    'charset'   => '',
    'collation' => '',
    'prefix'    => ''
));
$capsule->bootEloquent();

// Slim App
$app = new \Slim\Slim($config);

// Routes
require 'routes.php';
