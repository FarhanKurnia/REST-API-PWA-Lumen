<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id','review','rating',
    ];

    public function destinasi(){
    	return $this->belongsTo(Destinasi::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
