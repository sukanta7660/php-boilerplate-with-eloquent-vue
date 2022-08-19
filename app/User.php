<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'is_approved', 'contact_no', 'address', 'role', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

  public function requests() :HasMany
  {
    return $this->hasMany(BookIssue::class);
  }

  public function notifications() :HasMany
  {
    return $this->hasMany(Notification::class);
  }
}