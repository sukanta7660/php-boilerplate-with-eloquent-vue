<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('notifications', function (Blueprint $table) {

  $table->increments('id');
  $table->integer('book_issue_id')->unsigned()->index();
  $table->foreign('book_issue_id')->references('id')->on('book_issues');
  $table->integer('user_id')->unsigned()->index();
  $table->foreign('user_id')->references('id')->on('users');
  $table->text('message');
  $table->float('amount')->default(0);
  $table->timestamps();

});