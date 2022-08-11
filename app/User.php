<?php

namespace App;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'is_approved', 'contact_no', 'address', 'role', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}