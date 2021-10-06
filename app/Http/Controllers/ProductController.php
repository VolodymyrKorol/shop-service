<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProviderCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request, $provider_category_id) {
        return response()->json(
            Product::query()->where('provider_category_id', $provider_category_id)->get() ?? []
        );
    }

    public function getMenu(Request $request, $provider_id) {
        $result = [];
        $categories = ProviderCategory::query()->where('provider_id', $provider_id)->get();
        foreach ($categories as $category) {
            $result[] = [
                'category' => $category,
                'products' => $category->products
            ];
        }
        return response()->json(
            $result ?? []
        );
    }
}
