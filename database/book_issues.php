<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('book_issues', function (Blueprint $table) {

  $table->increments('id');
  $table->integer('book_id')->unsigned()->index();
  $table->foreign('book_id')->references('id')->on('books');
  $table->integer('user_id')->unsigned()->index();
  $table->foreign('user_id')->references('id')->on('users');
  $table->dateTime('issue_date')->default(null);
  $table->dateTime('return_date')->default(null);
  $table->dateTime('actual_return_date')->default(null);
  $table->enum('status', ['pending','accepted','issued','cancelled','returned'])
    ->default('pending')
  ;
  $table->float('fine')->default(0);
  $table->timestamps();

});