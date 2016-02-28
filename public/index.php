<?php

define('APP_ROOT', dirname(__DIR__));

require APP_ROOT . '/vendor/autoload.php';

// Init new Slim App
$app = New \SlimController\Slim(array(
    'templates.path'             => APP_ROOT . '/src/AToZ/View',
    'controller.class_prefix'    => '\\AToZ\\Controller',
    'controller.method_suffix'   => 'Action',
    'controller.template_suffix' => 'php',
));

// Routes
$app->addRoutes(array(
    '/' => 'LetterController:index'
));

$app->run();
