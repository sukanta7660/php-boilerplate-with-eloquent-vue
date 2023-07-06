<?php

namespace App\Database;

use App\Database\Migrations\CreateUserTable;

class DbMigrator
{
    /**
     * @var $migrations array
     * Register all migrations
     */
    private static $migrations = [
        CreateUserTable::class
    ];

    public static function run()
    {
        foreach (self::$migrations as $migration) {
            (new $migration)->up();
        }
    }

    public static function down()
    {
        foreach (self::$migrations as $migration) {
            (new $migration)->down();
        }
    }

}
