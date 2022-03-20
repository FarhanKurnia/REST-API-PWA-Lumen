<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([[
            'user_id' => '1',
            'destinasi_id'=>'1',
        	'review' => 'Tempat wisata yang seru untuk bahan edukasi tapi juga bagus untuk foto foto karena banyak spot yang unik',
        	'rating' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '2',
            'destinasi_id'=>'1',
        	'review' => 'Salah satu tempat bersejarah yg cukup bagus buat dikunjungi. Cocok buat foto-foto',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '1',
            'destinasi_id'=>'1',
        	'review' => 'wisata legend dari jaman dahulu, masih terawat sekali',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '1',
            'destinasi_id'=>'2',
        	'review' => 'Kesini pas lgi berkabut dan hujan, hhmm mengsad, dingin euy',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);

    }
}
