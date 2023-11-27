<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username'  => 'marcelloyoel',
            'email'  => 'marcelloyoel10@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'marcello keren',
            'address' => 'Jalan Melati Mas',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'leonardojose',
            'email'  => 'leonardojose@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'leo',
            'address' => 'Jalan Gardenia I',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'jonathan',
            'email'  => 'jonathan@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'jo',
            'address' => 'Jalan BSD City',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'jejaklangkah',
            'email'  => 'jejaklangkah@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Jelang BSD',
            'address' => 'Jl. Regensi Melati Mas, RT.5/RW.11, Jelupang, Serpong Utara',
            'phoneNumber'  => '085770880822',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'buyer',
            'email'  => 'buyer@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'buyerDummy',
            'address' => 'Hypermart Villa Melati Mas',
            'phoneNumber'  => '089615736938',
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'elonmusk',
            'email'  => 'elon@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Elon Musk',
            'address' => 'Jalan Rengasdengklok no 32',
            'phoneNumber'  => '089615736932',
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'mrbeast',
            'email'  => 'beast@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Mr. Beast',
            'address' => 'Jalan Pagi Siang no 11',
            'phoneNumber'  => '089612736932',
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'zaynmalik',
            'email'  => 'zayn@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Zayn Malik',
            'address' => 'Jalan Sudirman no 77',
            'phoneNumber'  => '089615736932',
            'picture'       => '',
        ]);
        User::factory(25)->create();
        User::create([
            'username'  => 'shoeporter',
            'email'  => 'shoeporter@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'ShoePorter',
            'address' => 'Lt.2 Lemari Kopi Jl. Griya Loka Raya Blok RE2/4 Kec. Serpong, Kota Tangerang Selatan',
            'phoneNumber'  => '087880057656',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'sneakerssyndicate',
            'email'  => 'sneakerssyndicate@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Sneakers Syndicate',
            'address' => 'Lobby basement 5 BA 20, Sumarecon Mall Serpong',
            'phoneNumber'  => '087878649308',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'solecase',
            'email'  => 'solecase@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Solecase',
            'address' => 'Mall @Alam Sutera, LG Floor Unit 10C',
            'phoneNumber'  => '08812234445',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'laundryshoe.id',
            'email'  => 'laundryshoe.id@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Laundryshoe.id',
            'address' => 'Posisi di Lantai 2 masuk dari Smartwash Laundry coin (Samping Steam Arema 24jam, Jl. Ciater Raya No.99B, Kec. Serpong, Kota Tangerang Selatan',
            'phoneNumber'  => '082140003484',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'mozdeo',
            'email'  => 'mozdeo@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Modzeo',
            'address' => 'Rawa Mekar Jaya, Serpong Sub-District, South Tangerang City',
            'phoneNumber'  => '08118888001',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'dinoshoes',
            'email'  => 'dinoshoes@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Dinoshoes',
            'address' => 'Granada Square Blok I No. 63 A Sektor 12, Jl. Kencana Loka, Ciater, Kec. Serpong, Kota Tangerang Selatan',
            'phoneNumber'  => '081807000686',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'sucishoelab',
            'email'  => 'sucishoelab@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Suci Shoelab',
            'address' => 'Ruko Barcelona, E9/39 (Lantai 2, Jl. Letnan Sutopo No.2, Rw. Mekar Jaya, Kec. Serpong, Kota Tangerang Selatan',
            'phoneNumber'  => '081212480288',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'shufix',
            'email'  => 'shufix@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'ShuFix',
            'address' => 'Pasar Modern BSD City, Kios Unit K159',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'cleanpatu',
            'email'  => 'cleanpatu@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Cleanpatu',
            'address' => 'Jl. Pahlawan Seribu, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan',
            'phoneNumber'  => '081574370667',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'thecleanbar',
            'email'  => 'thecleanbar@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'The Clean Bar',
            'address' => 'BSD Plaza Lantai Dasar, Jl. Pahlawan Seribu, Lengkong Wetan, Serpong Sub-District, South Tangerang City',
            'phoneNumber'  => '087885156677',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        User::create([
            'username'  => 'cleanavenue',
            'email'  => 'cleanavenue@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Clean Avenue',
            'address' => 'L. Raya Lengkong Wetan BSD - Bintaro No. 137',
            'phoneNumber'  => '081281063662',
            'group_id'     =>  2,
            'picture'       => '',
        ]);
        //45
        User::create([
            'username'  => 'freshclean',
            'email'  => 'freshclean@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Fresh Clean Laundry',
            'address' => 'Ruko South Goldfinch Blok SGD No.25, Kabupaten Tangerang, Banten 15810',
            'phoneNumber'  => '081281061111',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'shoesbar',
            'email'  => 'shoesbar@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'The Shoes Bar Gading Serpong',
            'address' => 'Jl. Gading boulevard golf Jl. Boulevard Raya Gading Serpong No.m5/9, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810',
            'phoneNumber'  => '081281061112',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'rakun',
            'email'  => 'rakun@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Rakun Cuci Sepatu',
            'address' => 'Gading Serpong, Ruko Crystal 1, Jl. Gading Golf Boulevard No.33, West Pakulonan, Kelapa Dua, Tangerang Regency, Banten 15810',
            'phoneNumber'  => '081281061122',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'tinytidy',
            'email'  => 'tinytidy@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'tinyTidy Shoe',
            'address' => 'Gading Serpong, Ruko Crystal, 2 Jl. Ki Hajar Dewantara No.42, West Pakulonan, Kelapa Dua, Tangerang Regency, Banten 15810',
            'phoneNumber'  => '081281061222',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'shoeborn',
            'email'  => 'shoeborn@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Shoeborn Shoe And Bag Care',
            'address' => 'Ruko Crystal 2 31, Jl. Ki Hajar Dewantara No.31, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810',
            'phoneNumber'  => '081281062222',
            'group_id'     =>  2
        ]);
        //50
        User::create([
            'username'  => 'fixbersih',
            'email'  => 'fixbersih@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'FIX BERSIH Laundry',
            'address' => 'QJ4H+PW6 Banten 15810, Ruko Rodeo Drive, Pakulonan Bar., Kec. Klp. Dua, Kabupaten Tangerang, Banten',
            'phoneNumber'  => '081281062223',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'litfeeds',
            'email'  => 'litfeeds@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Litfeeds',
            'address' => 'Taman Mangu Indah No.3, RT.005/RW.006, Pondok Aren, South Tangerang City, Banten 15224',
            'phoneNumber'  => '081281062233',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'washsins',
            'email'  => 'washsins@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Washsins Shoes Care',
            'address' => 'Jl. Pd. Jaya No.15, RT.04/RW.03, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224',
            'phoneNumber'  => '081281062333',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'laces',
            'email'  => 'laces@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Laces Laundry & Treatment',
            'address' => 'Pondok Maharta C12 No. 19, RT.002 RW011/RW.010, East Pondok Kacang, Pondok Aren, South Tangerang City, Banten 15226',
            'phoneNumber'  => '081281063333',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'shoepreme',
            'email'  => 'shoepreme@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Shoepreme Bintaro',
            'address' => 'Jl. Camar 1 No.30, RT.6/RW.8, Pd. Betung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15221',
            'phoneNumber'  => '081281063334',
            'group_id'     =>  2
        ]);
        //55
        User::create([
            'username'  => 'sncsektor9',
            'email'  => 'sncsektor9@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Shoes & Care Bintaro Sektor 9',
            'address' => 'Jl. Elang No.17, Pd. Pucung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229',
            'phoneNumber'  => '081281063344',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'kvlt',
            'email'  => 'kvlt@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Sneakers KVLT Graha Raya',
            'address' => 'Blk. AB, Jl. Graha Raya Bintaro, Parigi Baru, Jaya, Kota Tangerang Selatan, Banten 15228',
            'phoneNumber'  => '081281063444',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'cleanstain',
            'email'  => 'cleanstain@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Clean Stain Laundry',
            'address' => 'Pasar Segar Graha Raya Blok KC-1/06 Pintu Selatan, Pd. Jagung Tim., Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15324',
            'phoneNumber'  => '081281064444',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'dinoshoesBintaro',
            'email'  => 'dinoshoesbintaro@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Dinoshoes Laundry Bintaro',
            'address' => 'Rumah Bakmi Cwims, Jl. Bintaro Selatan No.5, Bintaro, Kec. Pesanggrahan, Daerah Khusus Ibukota Jakarta 15412',
            'phoneNumber'  => '081281064445',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'rakunbsd',
            'email'  => 'rakunbsd@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Rakun Cuci Sepatu BSD Anggrek Loka',
            'address' => 'Jl. Anggrek Ungu No.A No.10, RW.10, Rw. Buntu, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
            'phoneNumber'  => '081281064455',
            'group_id'     =>  2
        ]);
        //60
        User::create([
            'username'  => 'cartel',
            'email'  => 'cartel@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'CARTEL SHOES CARE',
            'address' => 'Jalan Kp Gunung Gg. Hikmah No.33, RT.4/RW.16, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414',
            'phoneNumber'  => '081281064555',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'texas99',
            'email'  => 'texas99@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Cuci Sepatu Texas99',
            'address' => 'Gg. H. Endong 2 No.3, Pisangan, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15419',
            'phoneNumber'  => '081281065555',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'vroz',
            'email'  => 'vroz@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'VROZ CLEAN SHOES CIPUTAT',
            'address' => 'Jl. Merpati Raya No.2, RT.07/RW.01, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413',
            'phoneNumber'  => '081281065556',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'cleanbrushbintaro',
            'email'  => 'cleanbrushbintaro@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Laundry Sepatu Bintaro Clean Brush',
            'address' => 'Cattleya Bintaro Residence, Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan, Banten',
            'phoneNumber'  => '081281065566',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'cleanmotion',
            'email'  => 'cleanmotion@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Clean Motion Drop Point Jombang Ciputat - Laundry Sepatu',
            'address' => 'Gg. Damai No.07, RT.07/RW.06, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414',
            'phoneNumber'  => '081281065666',
            'group_id'     =>  2
        ]);
        //65
        User::create([
            'username'  => 'queenshoes',
            'email'  => 'queenshoes@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Queen Shoes Cleaning - Gading Serpong',
            'address' => 'Jl. Medang II No.13, Medang, Kec. Pagedangan, Kabupaten Tangerang, Banten 15334',
            'phoneNumber'  => '081281066666',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'shoestamp',
            'email'  => 'shoestamp@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Shoestamp Laundry Sepatu Pamulang',
            'address' => 'Jl. Taman Permata 2 No.8, Bakti Jaya, Setu, South Tangerang City, Banten 15315',
            'phoneNumber'  => '081281066667',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'shoekick',
            'email'  => 'shoekick@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'SHOEKICK',
            'address' => 'PMM3+GQW, Jl. Amil Mena, Pd. Jagung, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326',
            'phoneNumber'  => '081281066677',
            'group_id'     =>  2
        ]);
    }
}
