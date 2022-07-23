<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('categories', function (Blueprint $table) {

  $table->increments('id');
  $table->string('name');
  $table->boolean('status')->default(true);
  $table->timestamps();

});