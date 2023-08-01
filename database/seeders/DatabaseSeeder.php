<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group;
use App\Models\GroupMenu;
use App\Models\LaundrySepatu;
use App\Models\Menu;
use App\Models\MenuType;
use App\Models\Service;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Bikin Group atau disebut Role
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
        User::create([
            'username'  => 'marcelloyoel',
            'email'  => 'marcelloyoel10@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'marcello keren',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4
        ]);
        User::create([
            'username'  => 'leonardojose',
            'email'  => 'leonardojose@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'leo',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4
        ]);
        User::create([
            'username'  => 'jonathan',
            'email'  => 'jonathan@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 4,
            'displayName'  => 'jo',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  4
        ]);
        User::create([
            'username'  => 'jejaklangkah',
            'email'  => 'jejaklangkah@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Jelang BSD',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  2
        ]);

        LaundrySepatu::create([
            'user_id'   => 4,
            'laundrySepatuName' => 'Jejak Langkah',
            'laundrySepatuSlug' => 'jejak-langkah',
            'bio' => 'Welcome to jejak langkah dimana anda dapat merasakan mencuci sepatu dengan kualitas terbaik. Harga kaki lima, tetapi kualitas bintang lima. Ayo segera daftarkan diri anda!'
        ]);

        User::factory(10)->create();
        LaundrySepatu::factory(10)->create();

        Service::create([
            'laundrySepatu_id'  => 1,
            'serviceName'  => 'Cuci bersih total',
            'serviceSlug'  => 'cuci-bersih-total',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Disini, sepatu anda akan manjakan dengan sentuhan cucian yang lembut dan bersih. Terbaik deh!',
        ]);

        // untuk menu type buyer
        MenuType::create([
            'menuTypeName'  => 'Home'
            // *home dibikin masuk menuSection dengan nanti isi menu sectionnya ya Home itu sendiri
        ]);
        MenuType::create([
            'menuTypeName'  => 'Transaction'
        ]);

        //untuk menu type laundry sepatu
        MenuType::create([
            'menuTypeName'  => 'Home'
            // *home dibikin masuk menuSection dengan nanti isi menu sectionnya ya Home itu sendiri
            // gausah khawatir sama, karena pasti beda id sama yang buyer punya
        ]);
        MenuType::create([
            'menuTypeName'  => 'Transaction'
            // gausah khawatir sama, karena pasti beda id sama yang buyer punya
        ]);
        MenuType::create([
            'menuTypeName'  => 'Service'
        ]);

        // untuk menu type Admin:
        MenuType::create([
            'menuTypeName'  => 'Home'
            // *home dibikin masuk menuSection dengan nanti isi menu sectionnya ya Home itu sendiri
            // gausah khawatir sama, karena pasti beda id sama yang buyer punya
        ]);
        MenuType::create([
            'menuTypeName'  => 'Transaction'
            // gausah khawatir sama, karena pasti beda id sama yang buyer dan laundry sepatu punya
        ]);
        MenuType::create([
            'menuTypeName'  => 'Profile'
            // *profile dibikin masuk menuSection dengan nanti isi menu sectionnya ya Profile itu sendiri
        ]);

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





        //Bikin Group Menu
        //Buat ngasih tau role ini bisa akses
        //menu apa saja

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
