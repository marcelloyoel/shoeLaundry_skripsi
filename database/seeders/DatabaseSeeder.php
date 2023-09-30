<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group;
use App\Models\GroupMenu;
use App\Models\LaundrySepatu;
use App\Models\Menu;
use App\Models\MenuType;
use App\Models\Order;
use App\Models\OrderToService;
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
            'bio' => 'Welcome to jejak langkah dimana anda dapat merasakan mencuci sepatu dengan kualitas terbaik. Harga kaki lima, tetapi kualitas bintang lima. Ayo segera daftarkan diri anda!',
            'picture' => '',
            'kontak' => '081211112222',
            'alamat' => 'Jalan Sutera 7 no 12',
            'jarak' => '200 m'
        ]);



        User::factory(25)->create();
        // LaundrySepatu::factory(25)->create();

        User::create([
            'username'  => 'buyer',
            'email'  => 'buyer@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'buyerDummy',
            'phoneNumber'  => '089615736938'
        ]);

        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Cuci bersih total',
            'serviceSlug'  => 'cuci-bersih-total',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Disini, sepatu anda akan manjakan dengan sentuhan cucian yang lembut dan bersih. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Cuci bersih cepat',
            'serviceSlug'  => 'cuci-bersih-cepat',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicuci dengan sentuhan cucian yang Cepat. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Recoloring',
            'serviceSlug'  => 'recoloring',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Disini, sepatu anda akan diwarnai ulang!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicat ulang!',
        ]);

        Order::create([
            'user_id'   => 30,
            'laundry_sepatu_id'    => 1,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Imam Bonjol 30 No.42 Karang Anyar Tangerang Selatan, Banten. 15323',
            'merkSepatu'       => 'Nike',
            'jenisSepatu'       => 'Air Jordan'
        ]);

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

        //buat laundry dengan nomer 2
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Clear Shoe',
            'serviceSlug'  => 'clear-shoe',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Disini, sepatu anda akan manjakan dengan sentuhan cucian yang lembut dan bersih. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Quick Wash',
            'serviceSlug'  => 'quick-wash',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicuci dengan sentuhan cucian yang Cepat. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Recoloring',
            'serviceSlug'  => 'recoloring-above',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Disini, sepatu anda akan diwarnai ulang!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint-above',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicat ulang!',
        ]);

        Order::create([
            'user_id'   => 30,
            'laundry_sepatu_id'    => 2,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Kompleks Villa Melati Mas Tangerang Selatan, Banten. 15323',
            'merkSepatu'       => 'Adidas',
            'jenisSepatu'       => 'Adidas Superstar White'
        ]);

        OrderToService::create([
            'order_id'  => 2,
            'service_id'    => 5
        ]);
        OrderToService::create([
            'order_id'  => 2,
            'service_id'    => 8
        ]);

        //buat laundry dengan nomer 3
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Super Clean Wash',
            'serviceSlug'  => 'super-clean-wash',
            'servicePrice'  => 105000,
            'serviceDescription'  => 'Disini, sepatu anda akan manjakan dengan sentuhan cucian yang lembut dan bersih. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Middle Clean Wash',
            'serviceSlug'  => 'middle-clean-wash',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicuci dengan sentuhan cucian yang Cepat. Terbaik deh!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Amateur Clean Wash',
            'serviceSlug'  => 'amateur-clean-wash',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Disini, sepatu anda akan diwarnai ulang!',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint-end',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Disini, sepatu anda akan dicat ulang!',
        ]);
        Order::create([
            'user_id'   => 30,
            'laundry_sepatu_id'    => 3,
            'phoneNumber'       => '089615736938',
            'address'           => 'Jalan Metro Pondok Indah, Jakarta Selatan, Jakarta. 15323',
            'merkSepatu'       => 'Airwalk',
            'jenisSepatu'       => 'Airwalk Air Fresh Bump 3X5 Super'
        ]);
        OrderToService::create([
            'order_id'  => 3,
            'service_id'    => 9
        ]);
        OrderToService::create([
            'order_id'  => 3,
            'service_id'    => 10
        ]);

        //another buyer
        User::create([
            'username'  => 'elonmusk',
            'email'  => 'elon@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Elon Musk',
            'phoneNumber'  => '089615736932'
        ]);
        Order::create([
            'user_id'   => 31,
            'laundry_sepatu_id'    => 1,
            'phoneNumber'       => '089618736938',
            'address'           => 'BCA Finance Pondok Indah',
            'merkSepatu'       => 'Fogo',
            'jenisSepatu'       => 'FOGO Super Running 2053'
        ]);

        OrderToService::create([
            'order_id'  => 4,
            'service_id'    => 1
        ]);
        OrderToService::create([
            'order_id'  => 4,
            'service_id'    => 2
        ]);
        User::create([
            'username'  => 'mrbeast',
            'email'  => 'beast@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Mr. Beast',
            'phoneNumber'  => '089612736932'
        ]);
        User::create([
            'username'  => 'zaynmalik',
            'email'  => 'zayn@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Zayn Malik',
            'phoneNumber'  => '089615736932'
        ]);
    }
}
