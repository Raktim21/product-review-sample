<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'slug' => Str::slug('Electronics'),
            'parent_id' => null,
        ]);

        Category::create([
            'name' => 'Mobile Phones',
            'slug' => Str::slug('Mobile phones'),
            'parent_id' => 1, // Assuming Electronics is parent
        ]);

        Category::create([
            'name' => 'Laptops',
            'slug' => Str::slug('Laptops'),
            'parent_id' => 1, // Assuming Electronics is parent
        ]);
    }
}
