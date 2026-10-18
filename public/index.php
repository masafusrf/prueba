<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use AP35\Core\Dispatcher;
use AP35\Core\Request;
use AP35\Core\RouteCollection;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$route = new RouteCollection();
$request = new Request();

$dispacher = new Dispatcher($route, $request);