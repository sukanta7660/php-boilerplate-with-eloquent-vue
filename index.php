<?php

use Dotenv\Dotenv;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;
use App\User;

require_once __DIR__ .'/bootstrap.php';

session_start();

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$route = new RouteCollector(new RouteParser());

require_once 'routes/index.php';

$dispatcher = new Dispatcher($route->getData());

try {

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    echo $response;

} catch (HttpRouteNotFoundException $e) {

    echo $e->getMessage();
    die();

} catch (HttpMethodNotAllowedException $e) {

    echo $e->getMessage();
    die();

}