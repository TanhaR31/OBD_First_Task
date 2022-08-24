<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory()->create([
            'user_id' => 1,
            'p_name' => 'Product A',
            'p_category' => 'Category A',
            'p_description' => 'Product A Description',
            'p_price' => 1000,
            'p_image' => 'product-a.png',
            'created_at' => '2022-08-24 07:44:18',
            'updated_at' => '2022-08-24 07:44:18'
        ]);
        \App\Models\Product::factory()->create([
            'user_id' => 2,
            'p_name' => 'Product B',
            'p_category' => 'Category B',
            'p_description' => 'Product B Description',
            'p_price' => 2000,
            'p_image' => 'product-b.png',
            'created_at' => '2022-08-24 07:46:18',
            'updated_at' => '2022-08-24 07:46:18'
        ]);
        \App\Models\Product::factory()->create([
            'user_id' => 2,
            'p_name' => 'Product C',
            'p_category' => 'Category A',
            'p_description' => 'Product C Description',
            'p_price' => 3000,
            'p_image' => 'product-c.png',
            'created_at' => '2022-08-24 07:48:18',
            'updated_at' => '2022-08-24 07:48:18'
        ]);
        \App\Models\Product::factory()->create([
            'user_id' => 1,
            'p_name' => 'Product D',
            'p_category' => 'Category C',
            'p_description' => 'Product D Description',
            'p_price' => 4000,
            'p_image' => 'product-d.png',
            'created_at' => '2022-08-24 07:50:18',
            'updated_at' => '2022-08-24 07:50:18'
        ]);
        \App\Models\Product::factory()->create([
            'user_id' => 3,
            'p_name' => 'Product E',
            'p_category' => 'Category C',
            'p_description' => 'Product E Description',
            'p_price' => 5000,
            'p_image' => 'product-e.png',
            'created_at' => '2022-08-24 07:52:18',
            'updated_at' => '2022-08-24 07:52:18'
        ]);
    }
}