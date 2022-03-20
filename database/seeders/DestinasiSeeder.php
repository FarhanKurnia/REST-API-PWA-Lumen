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
            'image_url' => 'https://jbbudaya.jogjabelajar.org/file/situs/59b98547526d3e9f5906867fab6f05cb.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Kaliadem',
        	'lokasi' => 'Kinarejo, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582',
        	'deskripsi' => 'Bungker beton terbengkalai dengan panorama gunung Merapi aktif, bisa dicapai melalui jalan tanah bergelombang',
            'image_url' => 'http://piknikasik.com/wp-content/uploads/2017/04/lava-tour-kaliadem-kaliurang.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Taman Pelangi Jogja',
        	'lokasi' => 'Jl. Ring Road Utara, Jongkang, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
        	'deskripsi' => 'Kegiatan berfoto sangat digemari di tempat wisata ini dengan lampion yang menyala saat malam & wahana anak.',
            'image_url' => 'https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/taman-pelangi-jogja.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Hutan Mangrove',
        	'lokasi' => 'Pasir Mendit, Jangkaran, Kec. Temon, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55654',
        	'deskripsi' => 'Tujuan wisata alam yang menawarkan keindahan hutan mangrove dan area untuk berfoto.',
            'image_url' => 'https://koran-jakarta.com/images/article/pesona-hutan-mangrove-kulon-progo-210329175634.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Gunung Api Purba',
        	'lokasi' => 'glanggeran Wetan, Nglanggeran, Kec. Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862',
        	'deskripsi' => 'Tujuan wisata alam yang menawarkan keindahan gunung dan kegiatan outdoor.',
            'image_url' => 'https://asset.kompas.com/crops/LQ2Mj770XSVajKN0p1bpSsuK3BY=/0x0:1800x1200/750x500/data/photo/2020/10/16/5f8982630b991.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'nama_destinasi' => 'Goa Jomblang',
        	'lokasi' => 'Jetis, Pacarejo, Kec. Semanu, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55893',
        	'deskripsi' => 'Gua pembuangan vertikal berbatu yang bisa dieksplorasi menggunakan peralatan caving yang disediakan di lokasi',
            'image_url' => 'https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/1-Goa-Jomblang.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
