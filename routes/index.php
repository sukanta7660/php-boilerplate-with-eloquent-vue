<?php

use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\Admin\BookController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\BookController as UserBookController;

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
$route->get('/books', [UserBookController::class, 'index']);
$route->get('/category/{id}/books/{slug}', [UserBookController::class, 'categoryWiseBooks']);

/*-------Admin Routes---------*/
$route->group(['prefix' => 'admin'], function (RouteCollector $route) {
    $route->get('dashboard', [DashboardController::class, 'index']);

    /*---------- Category ----------*/
    $route->group(['prefix' => 'category'], function (RouteCollector $route) {
        $route->get('/', [CategoryController::class, 'index']);
        $route->get('/create', [CategoryController::class, 'create']);
        $route->post('/store', [CategoryController::class, 'store']);
        $route->get('/edit/{id}', [CategoryController::class, 'edit']);
        $route->post('/update', [CategoryController::class, 'update']);
        $route->get('/delete/{id}', [CategoryController::class, 'delete']);
    });
    /*---------- Category ----------*/

    /*---------- Book ----------*/
    $route->group(['prefix' => 'book'], function (RouteCollector $route) {
        $route->get('/', [BookController::class, 'index']);
        $route->get('/create', [BookController::class, 'create']);
        $route->post('/store', [BookController::class, 'store']);
        $route->get('/edit/{id}', [BookController::class, 'edit']);
        $route->post('/update', [BookController::class, 'update']);
        $route->get('/delete/{id}', [BookController::class, 'delete']);
    });
    /*---------- Book ----------*/

});
/*-------Admin Routes---------*/

// demo auth middleware
$route->group(['before' => 'auth'], function (RouteCollector $route) {
    //
});