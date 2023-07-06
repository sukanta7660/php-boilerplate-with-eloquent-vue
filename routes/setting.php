<?php
/**
 * @var $route
 */

use App\Database\DbMigrator;
use App\Database\Seeders\DatabaseSeeder;

$route->get('/migrate', function () {
    (new DbMigrator())->run();
});

$route->get('/drop', function () {
    (new DbMigrator())->down();
});

$route->get('/seed', function () {
    (new DatabaseSeeder())->run();
});
