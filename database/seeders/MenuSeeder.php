<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Master Menu
        //Buyer
        //Home
        Menu::create([
            'menuType_id'   => 1,
            'menuName'   => 'Home',
            'menuLink'   => 'buyer/home',
            'menuSort'   => 1,
        ]);

        //Transaction
        Menu::create([
            'menuType_id'   => 2,
            'menuName'   => 'Shopping Cart',
            'menuLink'   => 'buyer/shoppingcart',
            'menuSort'   => 1,
        ]);
        Menu::create([
            'menuType_id'   => 2,
            'menuName'   => 'Order List',
            'menuLink'   => 'buyer/orderlist',
            'menuSort'   => 2,
        ]);

        //Laundry Sepatu
        //Home
        Menu::create([
            'menuType_id'   => 3,
            'menuName'   => 'Home',
            'menuLink'   => 'laundry/home',
            'menuSort'   => 1,
        ]);
        //Transaction
        Menu::create([
            'menuType_id'   => 4,
            'menuName'   => 'Order List',
            'menuLink'   => 'laundry/orderlist',
            'menuSort'   => 1,
        ]);
        //Service
        Menu::create([
            'menuType_id'   => 5,
            'menuName'   => 'Service List',
            'menuLink'   => 'laundry/servicelist',
            'menuSort'   => 1,
        ]);
        Menu::create([
            'menuType_id'   => 5,
            'menuName'   => 'Add Service',
            'menuLink'   => 'laundry/addservice',
            'menuSort'   => 2,
        ]);

        //Admin
        //Home
        Menu::create([
            'menuType_id'   => 6,
            'menuName'   => 'Home',
            'menuLink'   => 'admin/home',
            'menuSort'   => 1,
        ]);
        //Transaction
        Menu::create([
            'menuType_id'   => 7,
            'menuName'   => 'Order List',
            'menuLink'   => 'admin/orderlist',
            'menuSort'   => 1,
        ]);
        //Profile
        Menu::create([
            'menuType_id'   => 7,
            'menuName'   => 'Profile',
            'menuLink'   => 'admin/profile',
            'menuSort'   => 2,
        ]);
    }
}
