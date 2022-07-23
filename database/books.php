<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('books', function (Blueprint $table) {

  $table->increments('id');
  $table->integer('category_id')->unsigned()->index();
  $table->foreign('category_id')->references('id')->on('categories');
  $table->string('name');
  $table->string('author');
  $table->string('image')->default('default.jpg');
  $table->integer('availability')->default(0);
  $table->integer('quantity')->default(0);
  $table->boolean('status')->default(true);
  $table->timestamps();

});