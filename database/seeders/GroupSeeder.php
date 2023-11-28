<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Group::create([
            'groupName' => 'Buyer'
        ]);
        Group::create([
            'groupName' => 'Laundry Sepatu'
        ]);
        Group::create([
            'groupName' => 'Admin'
        ]);
        Group::create([
            'groupName' => 'Superadmin'
        ]);
    }
}
