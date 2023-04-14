<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bug extends Model
{
    use HasFactory;

    //Relacion con los users
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion con los subjects
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    
}