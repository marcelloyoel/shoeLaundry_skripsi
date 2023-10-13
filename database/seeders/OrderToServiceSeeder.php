<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderToService;

class OrderToServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderToService::create([
            'order_id'  => 1,
            'service_id'    => 1
        ]);
        OrderToService::create([
            'order_id'  => 1,
            'service_id'    => 2
        ]);
        OrderToService::create([
            'order_id'  => 1,
            'service_id'    => 3
        ]);

        OrderToService::create([
            'order_id'  => 2,
            'service_id'    => 15
        ]);
        OrderToService::create([
            'order_id'  => 2,
            'service_id'    => 16
        ]);

        OrderToService::create([
            'order_id'  => 3,
            'service_id'    => 5
        ]);
        OrderToService::create([
            'order_id'  => 3,
            'service_id'    => 6
        ]);

        OrderToService::create([
            'order_id'  => 4,
            'service_id'    => 16
        ]);
        OrderToService::create([
            'order_id'  => 4,
            'service_id'    => 17
        ]);

        OrderToService::create([
            'order_id'  => 5,
            'service_id'    => 2
        ]);

    }
}
