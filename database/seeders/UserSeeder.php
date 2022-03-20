<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name'=> 'farhan',
            'email'=> 'farhan4@gmail.com',
            'password'=>'rahasia',
            'token'=> "",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'=> 'kurnia',
            'email'=> 'farhan5@gmail.com',
            'password'=>'rahasia',
            'token'=> "",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
        
    }
}
