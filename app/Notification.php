<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
  protected $table = 'notifications';

  protected $guarded = ['id'];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}