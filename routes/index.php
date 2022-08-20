<?php

use App\Controllers\Admin\BookRequestController;
use App\Controllers\Admin\NotificationController;
use App\Controllers\Admin\UserController;
use App\Controllers\HomeController;
use App\Controllers\OwnProfileController;
use App\Controllers\ProfileController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\ContactController;
use App\Controllers\Admin\ContactController as AdminContactController;
use App\Controllers\Admin\BookController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\LogoutController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\BookController as UserBookController;

$route->get('/login', [LoginController::class, 'index']);
$route->get('/admin-login', [LoginController::class, 'adminLoginPage']);
$route->post('/login', [LoginController::class, 'loginAction']);
$route->post('/admin-login', [LoginController::class, 'adminLoginAction']);
$route->get('/register', [RegisterController::class, 'index']);
$route->get('/admin-register', [RegisterController::class, 'adminRegisterPage']);
$route->post('/admin-register', [RegisterController::class, 'adminRegister']);
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

$route->filter('admin', function(){
    if (auth_user()['role'] != 'admin') {
        $_SESSION['warning'] = 'You are not authorized for this page';
        return redirect('/');
    }
});

// welcome page
$route->get('/', [HomeController::class, 'index']);
$route->get('/about', [HomeController::class, 'about']);
$route->get('/contact', [HomeController::class, 'contact']);

// Store user message
$route->post('/store-messages', [ContactController::class, 'storeContactMessage']);

$route->get('/books', [UserBookController::class, 'index']);
$route->get('/category/{id}/books/{slug}', [UserBookController::class, 'categoryWiseBooks']);



$route->get('/book/{id}/book-details/{slug}', [UserBookController::class, 'bookDetails']);

$route->group(['before' => 'auth'], function (RouteCollector $route) {
  $route->get('/book/{id}/send-request/{slug}', [UserBookController::class, 'checkBookPage']);
  $route->post('/send-request', [UserBookController::class, 'sendRequest']);
  $route->post('/give-review', [UserBookController::class, 'giveReview']);

  /*---------- Profile ----------*/
  $route->get('/profile', [ProfileController::class, 'index']);
  $route->post('/profile-update', [ProfileController::class, 'profileUpdate']);
  $route->post('/password-change', [ProfileController::class, 'passwordChange']);
  /*---------- Profile ----------*/
  
  /*---------- Requests ----------*/
    $route->get('/my-records', [OwnProfileController::class, 'bookList']);
    $route->get('/notifications', [OwnProfileController::class, 'notifications']);
  /*---------- Requests ----------*/

});

/*-------Admin Routes---------*/
$route->group(['prefix' => 'admin', 'before' => 'auth'], function (RouteCollector $route) {
    
    $route->group(['before' => 'admin'], function ($route) {
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
            $route->get('/return-book/{id}', [BookRequestController::class, 'returnBook']);
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
    
        /*---------- Users ----------*/
        $route->group(['prefix' => 'users'], function (RouteCollector $route) {
            $route->get('/', [UserController::class, 'index']);
            $route->get('/admins', [UserController::class, 'admin']);
            $route->get('/admin/create', [UserController::class, 'create']);
            $route->post('/admin/store', [UserController::class, 'store']);
            $route->get('/status-change/{id}', [UserController::class, 'activeInactive']);
            $route->get('/delete-user/{id}', [UserController::class, 'deleteUser']);
        });
        /*---------- Users ----------*/
    
        /*---------- Contact ----------*/
        $route->group(['prefix' => 'contact'], function (RouteCollector $route) {
            $route->get('/', [AdminContactController::class, 'index']);
            $route->get('/delete/{id}', [AdminContactController::class, 'delete']);
        });
        /*---------- Contact ----------*/
    });

});
/*-------Admin Routes---------*/

$route->get('/seed-user', [\App\Controllers\SeedController::class, 'seedUsers']);

// demo auth middleware
$route->group(['before' => 'auth'], function (RouteCollector $route) {
    //
});
