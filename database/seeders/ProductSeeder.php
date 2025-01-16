<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data produk yang akan dimasukkan
        $products = [
            [
                'name' => 'Product 1',
                'slug' => Str::slug('Product 1'),
                'description' => 'Description for Product 1',
                'price' => 10000,
                'thumbnail' => 'product1.jpg',
            ],
            [
                'name' => 'Product 2',
                'slug' => Str::slug('Product 2'),
                'description' => 'Description for Product 2',
                'price' => 15000,
                'thumbnail' => 'product2.jpg',
            ],
            [
                'name' => 'Product 3',
                'slug' => Str::slug('Product 3'),
                'description' => 'Description for Product 3',
                'price' => 20000,
                'thumbnail' => 'product3.jpg',
            ],
        ];

        // Insert data ke tabel products
        DB::table('products')->insert($products);
    }
}
