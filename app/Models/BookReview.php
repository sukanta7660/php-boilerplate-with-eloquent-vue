<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookReview extends Model
{
  protected $table = 'book_reviews';

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
