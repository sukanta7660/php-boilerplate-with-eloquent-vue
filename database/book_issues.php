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
  $table->string('contact_no')->nullable();
  $table->string('address')->nullable();
  $table->dateTime('issue_date')->nullable();
  $table->dateTime('return_date')->nullable();
  $table->dateTime('actual_return_date')->nullable();
  $table->enum('status', ['pending','accepted','issued','cancelled','returned'])
    ->default('pending')
  ;
  $table->float('fine')->default(0);
  $table->timestamps();

});