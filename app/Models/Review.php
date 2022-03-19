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

    public function destinasi(){
    	return $this->belongsTo('App\Destinasi');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
