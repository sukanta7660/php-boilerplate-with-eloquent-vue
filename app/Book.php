<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

  public function reviews(): HasMany
  {
    return $this->hasMany(BookReview::class);
  }
}