<?php

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require_once __DIR__.'/vendor/autoload.php';
}

call_user_func(function ($bootstrap) {
    $bootstrap(__FILE__);
}, require(__DIR__.'/bootstrap.php'));
