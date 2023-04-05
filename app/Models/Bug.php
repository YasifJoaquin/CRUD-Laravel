<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    //Relacion con los users
    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion con los subjects
    public function subjects():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    
}