<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 2, // Product 1 in Mobile Phones category
        ]);

        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 3, // Product 2 in Laptops category
        ]);
    }
}
