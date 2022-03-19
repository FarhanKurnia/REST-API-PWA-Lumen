<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    //
    protected $table = 'destinasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_destinasi','lokasi','deskripsi',
    ];
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
