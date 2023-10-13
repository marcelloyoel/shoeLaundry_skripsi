<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Order::create([
            'user_id'   => 5,
            'laundry_sepatu_id'    => 1,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Imam Bonjol 30 No.42 Karang Anyar Tangerang Selatan, Banten. 15323',
            'merkSepatu'       => 'Nike',
            'jenisSepatu'       => 'Air Jordan'
        ]);
        Order::create([
            'user_id'   => 5,
            'laundry_sepatu_id'    => 3,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Imam Bonjol 30 No.42 Karang Anyar Tangerang Selatan, Banten. 15323',
            'merkSepatu'       => 'Adidas',
            'jenisSepatu'       => 'Adidas Yeezy'
        ]);
        Order::create([
            'user_id'   => 30,
            'laundry_sepatu_id'    => 2,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Kompleks Villa Melati Mas Tangerang Selatan, Banten. 15323',
            'merkSepatu'       => 'Adidas',
            'jenisSepatu'       => 'Adidas Superstar White'
        ]);
        Order::create([
            'user_id'   => 30,
            'laundry_sepatu_id'    => 3,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Metro Pondok Indah, Jakarta Selatan, Jakarta. 15323',
            'merkSepatu'       => 'Airwalk',
            'jenisSepatu'       => 'Airwalk Air Fresh Bump 3X5 Super'
        ]);
        Order::create([
            'user_id'   => 6,
            'laundry_sepatu_id'    => 1,
            'phoneNumber'       => '089618736938',
            'address'           => 'BCA Finance Pondok Indah',
            'merkSepatu'       => 'Fogo',
            'jenisSepatu'       => 'FOGO Super Running 2053'
        ]);

    }
}
