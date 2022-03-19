<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasis')->insert([
            'nama_destinasi' => 'Taman sari',
        	'lokasi' => 'Jl nga tau nga apal',
        	'deskripsi' => 'ayo kita ke tamansari',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Tugu Yogyakarta',
        	'lokasi' => 'Jl deket malioboro',
        	'deskripsi' => 'ayo kita ke tamansari',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
