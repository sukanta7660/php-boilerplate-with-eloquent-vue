<?php

use App\Controllers\Admin\BookRequestController;
use App\Controllers\Admin\NotificationController;
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\ContactController;
use App\Controllers\Admin\BookController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\LogoutController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\BookController as UserBookController;

$route->get('/login', [LoginController::class, 'index']);
$route->post('/login', [LoginController::class, 'loginAction']);
$route->get('/register', [RegisterController::class, 'index']);
$route->post('/register', [RegisterController::class, 'register']);
$route->post('/email-availability', [RegisterController::class, 'checkEligibility']);
$route->get('/logout', [LogoutController::class, 'logout']);

$route->filter('auth', function(){

    if(!isset($_SESSION['user']))
    {
        header('Location: /login');
        return false;
    }
});

// welcome page
$route->get('/', [HomeController::class, 'index']);

// Store user message
$route->post('/store-messages', [ContactController::class, 'storeContactMessage']);

$route->get('/books', [UserBookController::class, 'index']);
$route->get('/category/{id}/books/{slug}', [UserBookController::class, 'categoryWiseBooks']);

$route->post('/send-request', [UserBookController::class, 'sendRequest']);

$route->group(['before' => 'auth'], function (RouteCollector $route) {

    $route->get('/book/{id}/send-request/{slug}', [UserBookController::class, 'checkBookPage']);

});

/*-------Admin Routes---------*/
$route->group(['prefix' => 'admin', 'before' => 'auth'], function (RouteCollector $route) {
    
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

  /*---------- Requests ----------*/
  $route->group(['prefix' => 'requests'], function (RouteCollector $route) {
    $route->get('/new', [BookRequestController::class, 'index']);
    $route->get('/issue-book/{id}', [BookRequestController::class, 'issueRequest']);
    $route->get('/cancel-book/{id}', [BookRequestController::class, 'cancelRequest']);
    $route->post('/notify-user', [BookRequestController::class, 'notifyUser']);
    $route->get('/issued', [BookRequestController::class, 'issued']);
    $route->get('/cancelled', [BookRequestController::class, 'cancelled']);
    $route->get('/returned', [BookRequestController::class, 'returned']);
  });
  /*---------- Requests ----------*/

  /*---------- Requests ----------*/
  $route->group(['prefix' => 'notifications'], function (RouteCollector $route) {
    $route->get('/', [NotificationController::class, 'index']);
    $route->get('/delete/{id}', [NotificationController::class, 'delete']);
  });
  /*---------- Requests ----------*/

});
/*-------Admin Routes---------*/

// demo auth middleware
$route->group(['before' => 'auth'], function (RouteCollector $route) {
    //
});