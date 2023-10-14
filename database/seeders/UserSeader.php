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
            'address' => 'Jalan Anggrek 2 no 9',
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
    }
}
