<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'role', 'password', 'token', 'email_verified_at'
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
