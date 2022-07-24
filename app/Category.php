<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
  protected $table = 'categories';

  protected $fillable = [
    'name', 'status'
  ];

  public function books(): HasMany
  {
    return $this->hasMany(Book::class);
  }
}