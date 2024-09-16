<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $sort = request()->query('sort', 'best_sell');

        $products = $category->products()
            ->when($sort === 'top_rated', function ($query) {
                $query->withAvg('reviews as average_rating', 'rating')->orderByDesc('average_rating');
            })
            ->when($sort === 'price_high_to_low', function ($query) {
                $query->orderByDesc('price');
            })
            ->when($sort === 'price_low_to_high', function ($query) {
                $query->orderBy('price');
            })
            ->when($sort === 'best_sell', function ($query) {
                $query->withSum('orderDetails as total_sales', 'quantity')->orderByDesc('total_sales');
            })
            ->get();

        return response()->json([
            'status' => 200,
            'products' => $products
        ], 200);
    }
}
