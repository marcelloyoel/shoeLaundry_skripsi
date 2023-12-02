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
            'bio' => 'Welcome to jejak langkah dimana anda dapat merasakan mencuci sepatu dengan kualitas terbaik. Harga kaki lima, tetapi kualitas bintang lima. Ayo segera daftarkan diri anda!',
            'address' => 'Jl. Regensi Melati Mas, RT.5/RW.11, Jelupang, Serpong Utara',
            'contact' => '085770880822',
            'picture' => 'JejakLangkah.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 34,
            'laundrySepatuName' => 'ShoePorter',
            'bio' => 'Premium Shoe Laundry - Tempat Terdekat Cuci Sepatu Alam Sutera, Serpong, BSD, Pamulang, Tangerang',
            'address' => 'Lt.2 Lemari Kopi Jl. Griya Loka Raya Blok RE2/4 Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '087880057656',
            'picture' => 'ShoePorter.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 35,
            'laundrySepatuName' => 'Sneakers Syndicate',
            'bio' => 'SA\'s Exclusive Sneaker & Streetwear Marketplace',
            'address' => 'Sumarecon Mall Serpong',
            'contact' => '087878649308',
            'picture' => 'SneakerSyndicate.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 36,
            'laundrySepatuName' => 'Solecase',
            'bio' => 'Solecase Alam Sutera | Jasa Cuci Premium Untuk Sepatu dan Tas',
            'address' => 'Mall @Alam Sutera, LG Floor Unit 10C',
            'contact' => '08812234445',
            'picture' => 'Solecase.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 37,
            'laundrySepatuName' => 'Laundryshoe.id',
            'bio' => 'Solusi Tepat Cuci Sepatu Tas Topi Dompet Tanpa Buang Waktu. Free PickUp!',
            'address' => 'Posisi di Lantai 2 masuk dari Smartwash Laundry coin (Samping Steam Arema 24jam, Jl. Ciater Raya No.99B, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '082140003484',
            'picture' => 'LaundryshoeID.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 38,
            'laundrySepatuName' => 'Mozdeo',
            'bio' => 'Mozdeo adalah usaha yang bergerak dibidang jasa pencucian khusus tas & sepatu',
            'address' => 'Rawa Mekar Jaya, Serpong Sub-District, South Tangerang City',
            'contact' => '08118888001',
            'picture' => 'Mozdeo.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 39,
            'laundrySepatuName' => 'Dinoshoes',
            'bio' => 'Premium Laundry Shoes, Helmet, Bag & Free Pick Up',
            'address' => 'Granada Square Blok I No. 63 A Sektor 12, Jl. Kencana Loka, Ciater, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081807000686',
            'picture' => 'Dinoshoes.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 40,
            'laundrySepatuName' => 'SUCI Shoelab',
            'bio' => 'SUCI Shoelab adalah gerai cuci sepatu berlokasi di BSD City, Tangerang Selatan',
            'address' => 'Ruko Barcelona, E9/39 (Lantai 2, Jl. Letnan Sutopo No.2, Rw. Mekar Jaya, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081212480288',
            'picture' => 'Sucishoelab.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 41,
            'laundrySepatuName' => 'ShuFix',
            'bio' => 'Cuci Sepatu - Cuci Tas - Cuci Koper',
            'address' => 'Pasar Modern BSD City, Kios Unit K159',
            'contact' => '-',
            'picture' => '',
        ]);

        LaundrySepatu::create([
            'user_id'   => 42,
            'laundrySepatuName' => 'Cleanpatu',
            'bio' => 'Our services try to keep everything clean and looks good',
            'address' => 'Jl. Pahlawan Seribu, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan',
            'contact' => '081574370667',
            'picture' => 'Cleanpatu.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 43,
            'laundrySepatuName' => 'The Clean Bar',
            'bio' => 'Kami menawarkan jasa cuci sepatu, tas, koper, dompet dan lainnya untuk kamu yang sibuk bekerja',
            'address' => 'BSD Plaza Lantai Dasar, Jl. Pahlawan Seribu, Lengkong Wetan, Serpong Sub-District, South Tangerang City',
            'contact' => '087885156677',
            'picture' => 'TheCleanBar.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 44,
            'laundrySepatuName' => 'Clean Avenue',
            'bio' => 'Clean Avenue - Toko Reparasi Sepatu',
            'address' => 'L. Raya Lengkong Wetan BSD - Bintaro No. 137',
            'contact' => '081281063662',
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

        LaundrySepatu::create([
            'user_id'   => 45,
            'laundrySepatuName' => 'Fresh Clean Laundry',
            'bio' => 'Fresh Clean Laundry adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Ruko South Goldfinch Blok SGD No.25, Kabupaten Tangerang, Banten 15810',
            'contact' => '081281061111',
            'picture' => 'fresh-clean.jpg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 46,
            'laundrySepatuName' => 'The Shoes Bar Gading Serpong',
            'bio' => 'The Shoes Bar Gading Serpong adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Gading boulevard golf Jl. Boulevard Raya Gading Serpong No.m5/9, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810',
            'contact' => '081281061112',
            'picture' => 'the-shoes-bar.png',
        ]);

        LaundrySepatu::create([
            'user_id'   => 47,
            'laundrySepatuName' => 'Rakun Cuci Sepatu',
            'bio' => 'Rakun Cuci Sepatu adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Gading Serpong, Ruko Crystal 1, Jl. Gading Golf Boulevard No.33, West Pakulonan, Kelapa Dua, Tangerang Regency, Banten 15810',
            'contact' => '081281061122',
            'picture' => 'rakun-cuci-sepatu.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id'   => 48,
            'laundrySepatuName' => 'tinyTidy Shoe',
            'bio' => 'tinyTidy Shoe adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Gading Serpong, Ruko Crystal 1, Jl. Gading Golf Boulevard No.33, West Pakulonan, Kelapa Dua, Tangerang Regency, Banten 15810',
            'contact' => '081281061222',
            'picture' => 'tinytidy.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 49,
            'laundrySepatuName' => 'Shoeborn Shoe And Bag Care',
            'bio' => 'Shoeborn Shoe And Bag Care adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Ruko Crystal 2 31, Jl. Ki Hajar Dewantara No.31, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810',
            'contact' => '081281062222',
            'picture' => 'shoeborn.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id' => 50,
            'laundrySepatuName' => 'FIX BERSIH Laundry',
            'bio' => 'FIX BERSIH Laundry adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'QJ4H+PW6 Banten 15810, Ruko Rodeo Drive, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten',
            'contact' => '081281062223',
            'picture' => 'fix-bersih.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 51,
            'laundrySepatuName' => 'Litfeeds',
            'bio' => 'Litfeeds adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Taman Mangu Indah No.3, RT.005/RW.006, Pondok Aren, South Tangerang City, Banten 15224',
            'contact' => '081281062233',
            'picture' => 'Litfeeds.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id' => 52,
            'laundrySepatuName' => 'Washsins Shoes Care',
            'bio' => 'Washsins Shoes Care adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Pd. Jaya No.15, RT.04/RW.03, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224',
            'contact' => '081281062333',
            'picture' => 'washins.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 53,
            'laundrySepatuName' => 'Laces Laundry & Treatment',
            'bio' => 'Laces Laundry & Treatment adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Pondok Maharta C12 No. 19, RT.002 RW011/RW.010, East Pondok Kacang, Pondok Aren, South Tangerang City, Banten 15226',
            'contact' => '081281063333',
            'picture' => 'laces.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id' => 54,
            'laundrySepatuName' => 'Shoepreme Bintaro',
            'bio' => 'Shoepreme Bintaro adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Camar 1 No.30, RT.6/RW.8, Pd. Betung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15221',
            'contact' => '081281063334',
            'picture' => 'shoepreme.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 55,
            'laundrySepatuName' => 'Shoes & Care Bintaro Sektor 9',
            'bio' => 'Shoes & Care Bintaro Sektor 9 adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Elang No.17, Pd. Pucung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229',
            'contact' => '081281063344',
            'picture' => 'shoes-and-care.png',
        ]);

        LaundrySepatu::create([
            'user_id' => 56,
            'laundrySepatuName' => 'Sneakers KVLT Graha Raya',
            'bio' => 'Sneakers KVLT Graha Raya adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Blk. AB, Jl. Graha Raya Bintaro, Parigi Baru, Jaya, Kota Tangerang Selatan, Banten 15228',
            'contact' => '081281063444',
            'picture' => 'kvlt.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id' => 57,
            'laundrySepatuName' => 'Clean Stain Laundry',
            'bio' => 'Clean Stain Laundry adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Pasar Segar Graha Raya Blok KC-1/06 Pintu Selatan, Pd. Jagung Tim., Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15324',
            'contact' => '081281064444',
            'picture' => 'clean-stain.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 58,
            'laundrySepatuName' => 'Dinoshoes Laundry Bintaro',
            'bio' => 'Dinoshoes Laundry adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Rumah Bakmi Cwims, Jl. Bintaro Selatan No.5, Bintaro, Kec. Pesanggrahan, Daerah Khusus Ibukota Jakarta 15412',
            'contact' => '081281064445',
            'picture' => 'Dinoshoes.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 59,
            'laundrySepatuName' => 'Rakun Cuci Sepatu BSD Anggrek Loka',
            'bio' => 'Rakun Cuci Sepatu BSD Anggrek Loka adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Anggrek Ungu No.A No.10, RW.10, Rw. Buntu, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
            'contact' => '081281064455',
            'picture' => 'rakun-cuci-sepatu.jpeg',
        ]);

        LaundrySepatu::create([
            'user_id' => 60,
            'laundrySepatuName' => 'CARTEL SHOES CARE',
            'bio' => 'CARTEL SHOES CARE adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jalan Kp Gunung Gg. Hikmah No.33, RT.4/RW.16, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414',
            'contact' => '081281064555',
            'picture' => 'cartel.JPG',
        ]);

        LaundrySepatu::create([
            'user_id' => 61,
            'laundrySepatuName' => 'Cuci Sepatu Texas99',
            'bio' => 'Cuci Sepatu Texas99 adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Gg. H. Endong 2 No.3, Pisangan, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15419',
            'contact' => '081281065555',
            'picture' => 'texas.png',
        ]);

        LaundrySepatu::create([
            'user_id' => 62,
            'laundrySepatuName' => 'VROZ CLEAN SHOES CIPUTAT',
            'bio' => 'VROZ CLEAN SHOES CIPUTAT adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Merpati Raya No.2, RT.07/RW.01, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413',
            'contact' => '081281065556',
            'picture' => 'vroz.png',
        ]);

        LaundrySepatu::create([
            'user_id' => 63,
            'laundrySepatuName' => 'Laundry Sepatu Bintaro Clean Brush',
            'bio' => 'Laundry Sepatu Bintaro Clean Brush adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Cattleya Bintaro Residence, Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan, Banten',
            'contact' => '081281065566',
            'picture' => 'clean-brush.jpg',
        ]);

        LaundrySepatu::create([
            'user_id' => 64,
            'laundrySepatuName' => 'Clean Motion Drop Point Jombang Ciputat - Laundry Sepatu',
            'bio' => 'Clean Motion Drop Point Jombang Ciputat - Laundry Sepatu adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Gg. Damai No.07, RT.07/RW.06, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414',
            'contact' => '081281065666',
            'picture' => 'clean-motion.png',
        ]);

        LaundrySepatu::create([
            'user_id' => 65,
            'laundrySepatuName' => 'Queen Shoes Cleaning - Gading Serpong',
            'bio' => 'Queen Shoes Cleaning - Gading Serpong adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Medang II No.13, Medang, Kec. Pagedangan, Kabupaten Tangerang, Banten 15334',
            'contact' => '081281066666',
            'picture' => '',
        ]);

        LaundrySepatu::create([
            'user_id' => 66,
            'laundrySepatuName' => 'Shoestamp Laundry Sepatu Pamulang',
            'bio' => 'Shoestamp Laundry Sepatu Pamulang adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'Jl. Taman Permata 2 No.8, Bakti Jaya, Setu, South Tangerang City, Banten 15315',
            'contact' => '081281066667',
            'picture' => 'shoestamp.png',
        ]);

        LaundrySepatu::create([
            'user_id' => 67,
            'laundrySepatuName' => 'SHOEKICK',
            'bio' => 'SHOEKICK adalah laundry sepatu yang terdapat di BSD dekat Bintaro. Mari merapat untuk mendapatkan harga yang bersahabat',
            'address' => 'PMM3+GQW, Jl. Amil Mena, Pd. Jagung, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326',
            'contact' => '081281066677',
            'picture' => 'shoekick.jpg',
        ]);
    }
}
