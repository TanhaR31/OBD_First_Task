<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Mr. X',
            'phone' => 1777777777,
            'email' => 'mrx@gmail.com',
            'password' => '133631788e68ce51eb65eac86bc93753',
            'address' => 'Bashundhara, Dhaka',
            'image' => 'mrx.jpg',
            'created_at' => '2022-08-24 07:44:18',
            'updated_at' => '2022-08-24 07:44:18'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ms. Y',
            'phone' => 1888888888,
            'email' => 'msy@gmail.com',
            'password' => '133631788e68ce51eb65eac86bc93753',
            'address' => 'Baridhara, Dhaka',
            'image' => 'msy.jpg',
            'created_at' => '2022-08-24 08:22:27',
            'updated_at' => '2022-08-24 08:22:27'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Mr. Z',
            'phone' => 1999999999,
            'email' => 'mrz@gmail.com',
            'password' => '133631788e68ce51eb65eac86bc93753',
            'address' => 'Banani, Dhaka',
            'image' => 'mrz.jpg',
            'created_at' => '2022-08-24 08:30:27',
            'updated_at' => '2022-08-24 08:30:27'
        ]);
    }
}