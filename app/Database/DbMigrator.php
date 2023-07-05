<?php

namespace App\Database;

class DbMigrator
{
    /**
     * @var $migrations array
     * Register all migrations
     */
    private static $migrations = [
        // register here all of your migrations
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
