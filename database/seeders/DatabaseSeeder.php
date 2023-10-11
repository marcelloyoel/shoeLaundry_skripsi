<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        $this->call([
            LaundrySepatuSeeder::class,
            ServiceSeeder::class,
            GroupSeeder::class,
            UserSeader::class,
            OrderSeeder::class,
            OrderToServiceSeeder::class,
            MenuTypeSeeder::class,
            GroupMenuSeeder::class,
            MenuSeeder::class,
        ]);

    }
}
