<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('book_reviews', function (Blueprint $table) {

  $table->increments('id');
  $table->integer('book_id')->unsigned()->index();
  $table->foreign('book_id')->references('id')->on('books');
  $table->integer('user_id')->unsigned()->index();
  $table->foreign('user_id')->references('id')->on('users');
  $table->float('points')->default(0);
  $table->text('review')->nullable();
  $table->timestamps();

});