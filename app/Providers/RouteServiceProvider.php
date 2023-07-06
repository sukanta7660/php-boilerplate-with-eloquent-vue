<?php

namespace App\Providers;

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

class RouteServiceProvider
{
    public function __construct()
    {
        //
    }

    function boot()
    {
        $route = new RouteCollector(new RouteParser());

        if (file_exists(__DIR__.'/../../routes/setting.php')) {
            require_once __DIR__.'/../../routes/setting.php';
        }

        if (file_exists(__DIR__.'/../../routes/middleware.php')) {
            require_once __DIR__.'/../../routes/middleware.php';
        }

        if (file_exists(__DIR__ . '/../../routes/web.php')) {
            require_once __DIR__ . '/../../routes/web.php';
        }

        if (file_exists(__DIR__.'/../../routes/setting.php')) {
            require_once __DIR__.'/../../routes/setting.php';
        }

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
    }
}
