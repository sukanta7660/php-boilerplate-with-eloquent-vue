<?php

use Illuminate\Http\Request;

if (!function_exists('view')) {

    function view($view = 'index', $data = [])
    {
        extract($data, EXTR_SKIP);
        ob_start();
        require_once __DIR__ . '/../resources/views/' . $view . '.php';

    }

}

if (!function_exists('includePage')) {

    function includePage($path)
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

if (!function_exists('publicPath')) {
    function publicPath($filePath) {
        $server = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'];
        return "http://".$server.':'.$port.'/public/'.$filePath;
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
        $user = \App\Models\User::where('id', $sessionUserId)->first();

        if(!$user) {
            unset($_SESSION['user']);
            return null;
        }

        return $user;
    }
}

if(!function_exists('requests')) {
    function requests(): Request
    {
        return Request::capture();
    }
}

if (!function_exists('current_url')) {
  function current_url() {
    return $_SERVER['REQUEST_URI'];
  }
}

if (!function_exists('dateFormat')) {
  function dateFormat($date) {
    return date('d/m/Y', strtotime($date));
  }
}

if (!function_exists('get_time_ago')) {
  function get_time_ago( $time )
  {
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
      30 * 24 * 60 * 60       =>  'month',
      24 * 60 * 60            =>  'day',
      60 * 60                 =>  'hour',
      60                      =>  'minute',
      1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
      $d = $time_difference / $secs;

      if( $d >= 1 )
      {
        $t = round( $d );
        return $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
      }
    }
  }
}
