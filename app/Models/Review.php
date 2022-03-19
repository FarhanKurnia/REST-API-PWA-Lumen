<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'revies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id','review','rating',
    ];
}
