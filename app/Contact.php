<?php

namespace App;

class Contact extends Model
{
  protected $table = 'contacts';

  protected $fillable = [
    'name',
    'email',
    'subject',
    'messages',
    'status'
  ];

}