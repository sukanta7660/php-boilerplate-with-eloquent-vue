<?php

namespace App\Database\Migrations;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable
{
    static $tableName = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Capsule::schema()->hasTable(static::$tableName)) {
            Capsule::schema()->create(static::$tableName, function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('token')->nullable();
                $table->dateTime('email_verified_at')->nullable();
                $table->enum('role', ['admin', 'user'])->default('user');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Capsule::schema()->dropIfExists(static::$tableName);
    }
}
