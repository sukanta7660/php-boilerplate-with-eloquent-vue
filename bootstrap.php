<?php
use Dotenv\Dotenv;

return function ($file) {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if (file_exists(__DIR__.'/config/database.php')) {
        require_once __DIR__ . '/config/database.php';
    }

    (new \App\Application($file))->boot();

    session_start();

    (new \App\Providers\RouteServiceProvider())->boot();
};
