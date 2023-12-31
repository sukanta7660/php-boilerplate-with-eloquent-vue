<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
  protected $table = 'notifications';

  protected $guarded = ['id'];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

    public function book_issue(): BelongsTo
    {
        return $this->belongsTo(BookIssue::class);
    }
}
