<?php

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;

$route->get('/login', [LoginController::class, 'index']);
$route->get('/register', [RegisterController::class, 'index']);
$route->post('/register', [RegisterController::class, 'register']);

$route->filter('auth', function(){
    if(!isset($_SESSION['user']))
    {
        header('Location: /login');
        return false;
    }
    return true;
});

// welcome page
$route->get('/', [HomeController::class, 'index']);

/*-------Admin Routes---------*/
$route->group(['prefix' => 'admin'], function (RouteCollector $route) {
    $route->get('dashboard', [DashboardController::class, 'index']);

    /*---------- Category ----------*/
    $route->group(['prefix' => 'category'], function (RouteCollector $route) {
        $route->get('/', [CategoryController::class, 'index']);
        $route->get('/create', [CategoryController::class, 'create']);
        $route->post('/store', [CategoryController::class, 'store']);
        $route->get('/delete/{id}', [CategoryController::class, 'delete']);
    });
    /*---------- Category ----------*/
});
/*-------Admin Routes---------*/

// demo auth middleware
$route->group(['before' => 'auth'], function (RouteCollector $route) {
    //
});

