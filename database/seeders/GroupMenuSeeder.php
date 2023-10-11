<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupMenu;

class GroupMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Ini untuk group Buyer
        //Bisa akses apa aja di buyer
        GroupMenu::create([
            'group_id'  => 1,
            'menu_id'   => 1
        ]);
        GroupMenu::create([
            'group_id'  => 1,
            'menu_id'   => 2
        ]);
        GroupMenu::create([
            'group_id'  => 1,
            'menu_id'   => 3
        ]);

        //Ini untuk laundry
        GroupMenu::create([
            'group_id'  => 2,
            'menu_id'   => 4
        ]);
        GroupMenu::create([
            'group_id'  => 2,
            'menu_id'   => 5
        ]);
        GroupMenu::create([
            'group_id'  => 2,
            'menu_id'   => 6
        ]);
        GroupMenu::create([
            'group_id'  => 2,
            'menu_id'   => 7
        ]);

        //Untuk admin
        GroupMenu::create([
            'group_id'  => 3,
            'menu_id'   => 8
        ]);
        GroupMenu::create([
            'group_id'  => 3,
            'menu_id'   => 9
        ]);
        GroupMenu::create([
            'group_id'  => 3,
            'menu_id'   => 10
        ]);

        //Untuk superadmin
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 1
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 2
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 3
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 4
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 5
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 6
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 7
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 8
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 9
        ]);
        GroupMenu::create([
            'group_id'  => 4,
            'menu_id'   => 10
        ]);
    }
}
