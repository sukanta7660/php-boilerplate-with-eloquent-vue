<?php
use App\Hooks\Database\Configuration;
use App\Hooks\Database\Connection;

/**
 * @var $_ENV
 */

$driver = $_ENV['DB_DRIVER'];
$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_DATABASE'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$config = new Configuration(
    $driver,
    $host,
    $db,
    $username,
    $password
);
$connection = new Connection($config);

$connection->configure();
