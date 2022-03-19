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
        DB::table('reviews')->insert([
            'user_id' => '1',
        	'review' => 'bagus keren',
        	'rating' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '1',
        	'review' => 'bersih',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
