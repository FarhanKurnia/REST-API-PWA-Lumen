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
            'destinasi_id'=>'1',
        	'review' => 'Tempat wisata yang seru untuk bahan edukasi tapi juga bagus untuk foto foto karena banyak spot yang unik dan estetik📸🛖 walaupun wisata bangunan tua tapi semua lokasinya bersih dan terawat 🍃ada jasa guide juga tanpa patokan tarif, banyak kedai kedai dengan harga terjangkau',
        	'rating' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '2',
            'destinasi_id'=>'1',
        	'review' => 'Salah satu tempat bersejarah yg cukup bagus buat dikunjungi. Cocok buat foto-foto. Bangunan peninggalan dan kolamnya instagramable. Sayangnya yg jembatannya ga buka. Banyak banget tour guidenya, cukup membantu tapi sometimes agak mengganggu',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '1',
            'destinasi_id'=>'1',
        	'review' => 'wisata legend dari jaman dahulu, masih terawat sekali, orang2/warga sekitarnya juga peduli buat ngerawat dan jadiin rumahnya warung makanan minuman atau cinderamata, yok yg ke sana dilarisin dagangan warganya. tiket masuk untuk lokal juga murah 5rb, ada banyak guide yg bisa bantu jelasin sejarahnya dan menelusuri taman sari',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'user_id' => '1',
            'destinasi_id'=>'2',
        	'review' => 'Kesini pas lgi berkabut dan hujan, hhmm mengsad, dingin euy, wisata yang worth it siii, cuma bayar masuk 5eb parkir 2rb, makanan dn oleh2 juga terjangkau, kalo mo kesini liat prediksi cuaca dulu yaa gaesss',
        	'rating' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
