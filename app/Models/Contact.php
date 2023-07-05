<?php

namespace App\Models;

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
