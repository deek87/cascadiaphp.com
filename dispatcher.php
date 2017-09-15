<?php
// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$app = new \League\Container\Container();
$app->delegate(new \League\Container\ReflectionContainer());
$app->addServiceProvider(\PHPDX\Site\ServiceProvider::class);

$server = $app->get(\Zend\Diactoros\Server::class);

// Handle the incoming request
$server->listen();
