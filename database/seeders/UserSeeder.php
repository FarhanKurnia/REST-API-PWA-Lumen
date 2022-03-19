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
        DB::table('users')->insert([
            'name'=> 'farhan',
            'email'=> 'farhankurnia@gmail.com',
            'password'=>'rahasia',
            'token'=> "54d133fa7da02bceac9cfe1dad4b26d555f19bcbb69b3f4d7adb6dc50dcf2feebbcb53d1b5b9001c",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}
