<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
  protected $table = 'books';

  protected $fillable = [
    'category_id',
    'name',
    'author',
    'image',
    'availability',
    'quantity',
    'status'
  ];

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }
}