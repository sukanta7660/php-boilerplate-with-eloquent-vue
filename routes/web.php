<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;

/**
 * @var $route
 */

$route->group(['before' => 'guest'], function (RouteCollector $route) {
  $route->get('/login', [LoginController::class, 'index']);
  $route->get('/admin-login', [LoginController::class, 'adminLoginPage']);
  $route->post('/login', [LoginController::class, 'login']);
  $route->post('/admin-login', [LoginController::class, 'adminLoginAction']);
  $route->get('/register', [RegisterController::class, 'index']);
  $route->get('/admin-register', [RegisterController::class, 'adminRegisterPage']);
  $route->post('/admin-register', [RegisterController::class, 'adminRegister']);
  $route->post('/register', [RegisterController::class, 'register']);
});

$route->post('/email-availability', [RegisterController::class, 'checkEligibility']);
$route->get('/logout', [LogoutController::class, 'logout']);


$route->get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

// demo auth middleware
$route->group(['before' => 'auth'], function (RouteCollector $route) {
    //
});
