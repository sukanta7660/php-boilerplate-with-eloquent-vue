<?php

require "vendor/autoload.php";

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$driver = $_ENV['DB_DRIVER'];
$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_DATABASE'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => "$driver",
    "host" => "$host",
    "database" => "$db",
    "username" => "$username",
    "password" => "$password"
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();