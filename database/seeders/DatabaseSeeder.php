<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Product::factory(10)->create();

        \App\Models\Product::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $data = [
            ['1', 'produk A', 'Ini adalah produk A', '20000', '123', null],
            ['2', 'produk B', 'Ini adalah produk B', '29000', '12', null],
            ['3', 'produk C', 'Ini adalah produk C', '10000', '123', null]
        ];
        \App\Models\Product::factory()->create($data);
    }
}
