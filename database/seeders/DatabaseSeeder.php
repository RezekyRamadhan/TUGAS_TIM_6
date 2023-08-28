<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        
        Product::create([
        'name' => 'Apple iPhone 14 Pro Max',
        'description' => '',
        'price' => '$199.00',
        'stock' => '20',
        'image' => '1.jpg',
        ]);
        Product::create([
        'name' => 'Apple Macbook Pro M2',
        'description' => '',
        'price' => '$188.00',
        'stock' => '20',
        'image' => '2.jpg',
        ]);
        Product::create([
        'name' => 'Samsung S23 Ultra',
        'description' => '',
        'price' => '$189.00',
        'stock' => '20',
        'image' => '3.jpg',
        ]);
        Product::create([
        'name' => 'Lenovo Idepad Gaming 3i',
        'description' => '',
        'price' => '$190.00',
        'stock' => '20',
        'image' => '4.jpg',
        ]);
        Product::create([
        'name' => 'ASUS TUF Gaming',
        'description' => '',
        'price' => '$200.00',
        'stock' => '20',
        'image' => '5.jpg',
        ]);
    }
}
