<?php

namespace App;

class Conatct extends Model
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