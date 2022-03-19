<?php

namespace App\Models;
//namespace App;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    //
    protected $table = 'destinasis';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_destinasi','lokasi','deskripsi',
    ];
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
