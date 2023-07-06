<?php
/**
 * @var $route
 */

$route->filter('guest', function () {
    if(isset($_SESSION['user']))
    {
        header('Location: /dashboard');
        return false;
    }
});

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
        redirect('/');
    }
});
