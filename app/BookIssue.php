<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookIssue extends Model
{
  protected $table = 'book_issues';

  protected $guarded = ['id'];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function book(): BelongsTo
  {
    return $this->belongsTo(Book::class);
  }
}