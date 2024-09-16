<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'  => 'Product 1',
            'slug'  => Str::slug('Product 1'),
            'price' => 100.00,
        ]);

        Product::create([
            'name'  => 'Product 2',
            'slug'  => Str::slug('Product 2'),
            'price' => 150.00,
        ]);

        Product::create([
            'name'  => 'Product 3',
            'slug'  => Str::slug('Product 3'),
            'price' => 200.00,
        ]);
    }
}
