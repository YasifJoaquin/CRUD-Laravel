<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cornellnote extends Model
{
    use HasFactory;

    //relacion con con los users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //relacion con las topics
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}