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
        User::create([
            'username'  => 'buyer',
            'email'  => 'buyer@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'buyerDummy',
            'phoneNumber'  => '089615736938'
        ]);
        User::create([
            'username'  => 'elonmusk',
            'email'  => 'elon@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 1,
            'displayName'  => 'Elon Musk',
            'phoneNumber'  => '089615736932'
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
        User::factory(25)->create();
        User::create([
            'username'  => 'shoeporter',
            'email'  => 'shoeporter@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'ShoePorter',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  2
        ]);
        User::create([
            'username'  => 'sneakerssyndicate',
            'email'  => 'sneakerssyndicate@gmail.com',
            'password'  => bcrypt('12345'),
            'status'  => 2,
            'displayName'  => 'Sneakers Syndicate',
            'phoneNumber'  => '089615736938',
            'group_id'     =>  2
        ]);
    }
}
