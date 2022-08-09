<?php

use Illuminate\Http\Request;

if (!function_exists('view')) {

    function view($view = 'index', $data = [])
    {
        extract($data, EXTR_SKIP);
        ob_start();
        require_once __DIR__ . '/../views/' . $view . '.php';

    }

}

if (!function_exists('include_page')) {

    function include_page($path)
    {
        require_once __DIR__ . '/../views/' . $path . '.php';

    }

}

if (!function_exists('URI')) {
    function URI($url) {
        $server = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'];
        return "http://".$server.':'.$port . $url;
    }
}

if (!function_exists('public_path')) {
    function public_path($filePath) {
        $server = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'];
        return "http://".$server.':'.$port.'/public/'.$filePath;
    }
}

  if(!function_exists('request')){
    function request()
    {
      $data = http_get_request_body();
      return $data;

    }
  }

  if (!function_exists('redirect')) {
      function redirect($location = '/')
      {
          header('Location: '.$location);
          exit();
      }
  }

  if(!function_exists('dd')){
      function dd($data)
      {
          echo '<pre>';
          var_dump($data);
          echo '</pre>';
          die();
      }
  }

if(!function_exists('auth_user')) {

    function auth_user(){

        if(!isset($_SESSION['user'])) {
            return null;
        }

        $sessionUserId = $_SESSION['user']['id'];
        $user = \App\User::where('id', $sessionUserId)->first();

        if(!$user) {
            unset($_SESSION['user']);
            return null;
        }

        return $user;
    }
}

if(!function_exists('user_inputs')) {
    function user_inputs()
    {
        return Request::capture();
    }
}