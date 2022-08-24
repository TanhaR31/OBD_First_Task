<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()->create([
            'ct_name' => 'Category A',
            'created_at' => '2022-08-24 07:44:18',
            'updated_at' => '2022-08-24 07:44:18'
        ]);
        \App\Models\Category::factory()->create([
            'ct_name' => 'Category B',
            'created_at' => '2022-08-24 07:47:18',
            'updated_at' => '2022-08-24 07:47:18'
        ]);
        \App\Models\Category::factory()->create([
            'ct_name' => 'Category C',
            'created_at' => '2022-08-24 07:50:18',
            'updated_at' => '2022-08-24 07:50:18'
        ]);
    }
}