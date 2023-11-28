<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuType;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
    }
}
