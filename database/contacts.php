<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('contacts', function (Blueprint $table) {

  $table->increments('id');
  $table->string('name');
  $table->string('email');
  $table->string('subject');
  $table->text('messages');
  $table->boolean('status')->default(true);
  $table->timestamps();

});