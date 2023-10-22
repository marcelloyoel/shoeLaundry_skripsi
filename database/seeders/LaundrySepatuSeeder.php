<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LaundrySepatu;


class LaundrySepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        LaundrySepatu::create([
            'user_id'   => 4,
            'laundrySepatuName' => 'Jejak Langkah',
            'laundrySepatuSlug' => 'jejak-langkah',
            'bio' => 'Welcome to jejak langkah dimana anda dapat merasakan mencuci sepatu dengan kualitas terbaik. Harga kaki lima, tetapi kualitas bintang lima. Ayo segera daftarkan diri anda!',
            'address' => 'Jl. Regensi Melati Mas, RT.5/RW.11, Jelupang, Serpong Utara',
            'contact' => '085770880822',
            'lat' => '-6.257880',
            'lng' => '106.665880',
            'picture' => 'JejakLangkah.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 34,
            'laundrySepatuName' => 'ShoePorter',
            'laundrySepatuSlug' => 'Hey! I\'m 100% Clean and Fresh',
            'bio' => 'Premium Shoe Laundry - Tempat Terdekat Cuci Sepatu Alam Sutera, Serpong, BSD, Pamulang, Tangerang',
            'address' => 'Lt.2 Lemari Kopi Jl. Griya Loka Raya Blok RE2/4 Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '087880057656',
            'lat' => '-6.305480',
            'lng' => '106.681390',
            'picture' => 'ShoePorter.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 35,
            'laundrySepatuName' => 'Sneakers Syndicate',
            'laundrySepatuSlug' => 'Taking Clean To Another Level',
            'bio' => 'SA\'s Exclusive Sneaker & Streetwear Marketplace',
            'address' => 'Lobby basement 5 BA 20, Sumarecon Mall Serpong',
            'contact' => '087878649308',
            'lat' => '',
            'lng' => '',
            'picture' => 'SneakerSyndicate.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 36,
            'laundrySepatuName' => 'Solecase',
            'laundrySepatuSlug' => 'Premium Shoe & Bag Laundry',
            'bio' => 'Solecase Alam Sutera | Jasa Cuci Premium Untuk Sepatu dan Tas',
            'address' => 'Mall @Alam Sutera, LG Floor Unit 10C',
            'contact' => '08812234445',
            'lat' => '',
            'lng' => '',
            'picture' => 'Solecase.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 37,
            'laundrySepatuName' => 'Laundryshoe.id',
            'laundrySepatuSlug' => 'Solusi Tepat Cuci Sepatu Tas Topi Dompet Tanpa Buang Waktu. Free PickUp!',
            'bio' => 'Solusi Tepat Cuci Sepatu Tas Topi Dompet Tanpa Buang Waktu. Free PickUp!',
            'address' => 'Posisi di Lantai 2 masuk dari Smartwash Laundry coin (Samping Steam Arema 24jam, Jl. Ciater Raya No.99B, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '082140003484',
            'lat' => '',
            'lng' => '',
            'picture' => 'LaundryshoeID.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 38,
            'laundrySepatuName' => 'Mozdeo',
            'laundrySepatuSlug' => 'Make Simple With Mozdeo',
            'bio' => 'Mozdeo adalah usaha yang bergerak dibidang jasa pencucian khusus tas & sepatu',
            'address' => 'Rawa Mekar Jaya, Serpong Sub-District, South Tangerang City',
            'contact' => '08118888001',
            'lat' => '',
            'lng' => '',
            'picture' => 'Mozdeo.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 39,
            'laundrySepatuName' => 'Dinoshoes',
            'laundrySepatuSlug' => 'Premium Laundry Shoes, Helmet, Bag & Free Pick Up',
            'bio' => 'Premium Laundry Shoes, Helmet, Bag & Free Pick Up',
            'address' => 'Granada Square Blok I No. 63 A Sektor 12, Jl. Kencana Loka, Ciater, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081807000686',
            'lat' => '',
            'lng' => '',
            'picture' => 'Dinoshoes.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 40,
            'laundrySepatuName' => 'SUCI Shoelab',
            'laundrySepatuSlug' => 'Solusi Semua Sepatumu',
            'bio' => 'SUCI Shoelab adalah gerai cuci sepatu berlokasi di BSD City, Tangerang Selatan',
            'address' => 'Ruko Barcelona, E9/39 (Lantai 2, Jl. Letnan Sutopo No.2, Rw. Mekar Jaya, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081212480288',
            'lat' => '',
            'lng' => '',
            'picture' => 'Sucishoelab.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 41,
            'laundrySepatuName' => 'ShuFix',
            'laundrySepatuSlug' => 'Cuci Sepatu - Cuci Tas - Cuci Koper',
            'bio' => 'Cuci Sepatu - Cuci Tas - Cuci Koper',
            'address' => 'Pasar Modern BSD City, Kios Unit K159',
            'contact' => '-',
            'lat' => '',
            'lng' => '',
            'picture' => '',
        ]);

        LaundrySepatu::create([
            'user_id'   => 42,
            'laundrySepatuName' => 'Cleanpatu',
            'laundrySepatuSlug' => 'Deep Shoe treatment and bag cleaning',
            'bio' => 'Our services try to keep everything clean and looks good',
            'address' => 'Jl. Pahlawan Seribu, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081574370667',
            'lat' => '',
            'lng' => '',
            'picture' => 'Cleanpatu.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 43,
            'laundrySepatuName' => 'The Clean Bar',
            'laundrySepatuSlug' => 'The First Fast Shoes and Bag Cleaning in the Mall. BSD Plaza',
            'bio' => 'Kami menawarkan jasa cuci sepatu, tas, koper, dompet dan lainnya untuk kamu yang sibuk bekerja',
            'address' => 'BSD Plaza Lantai Dasar, Jl. Pahlawan Seribu, Lengkong Wetan, Serpong Sub-District, South Tangerang City',
            'contact' => '087885156677',
            'lat' => '',
            'lng' => '',
            'picture' => 'TheCleanBar.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 44,
            'laundrySepatuName' => 'Clean Avenue',
            'laundrySepatuSlug' => 'Clean Avenue - Toko Reparasi Sepatu',
            'bio' => 'Clean Avenue - Toko Reparasi Sepatu',
            'address' => 'L. Raya Lengkong Wetan BSD - Bintaro No. 137',
            'contact' => '081281063662',
            'lat' => '',
            'lng' => '',
            'picture' => 'CleanAvenue.jpg',
        ]);


        // LaundrySepatu::create([
        //     'user_id'   => 4,
        //     'laundrySepatuName' => '',
        //     'laundrySepatuSlug' => '',
        //     'bio' => '',
        //     'address' => '',
        //     'contact' => '',
        // ]);


    }
}
