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
            'nama_destinasi' => 'Taman Sari',
        	'lokasi' => 'Patehan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55133',
        	'deskripsi' => 'Bekas taman kerajaan dari abad ke-18 dengan kompleks pemandian bertingkat dan arsitektur yang indah.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Kaliadem',
        	'lokasi' => 'Kinarejo, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582',
        	'deskripsi' => 'Bungker beton terbengkalai dengan panorama gunung Merapi aktif, bisa dicapai melalui jalan tanah bergelombang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Taman Pelangi Jogja',
        	'lokasi' => 'Jl. Ring Road Utara, Jongkang, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
        	'deskripsi' => 'Kegiatan berfoto sangat digemari di tempat wisata ini dengan lampion yang menyala saat malam & wahana anak.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Hutan Mangrove',
        	'lokasi' => 'Pasir Mendit, Jangkaran, Kec. Temon, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55654',
        	'deskripsi' => 'Tujuan wisata alam yang menawarkan keindahan hutan mangrove dan area untuk berfoto.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Gunung Api Purba',
        	'lokasi' => 'glanggeran Wetan, Nglanggeran, Kec. Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862',
        	'deskripsi' => 'Tujuan wisata alam yang menawarkan keindahan gunung dan kegiatan outdoor.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
