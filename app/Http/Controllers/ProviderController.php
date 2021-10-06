<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProviderController extends Controller
{
    public function getProvidersByCategory(Request $request, $category_id) {
        return response()->json(
            Provider::query()->where('category_id', $category_id)->get() ?? []
        );
    }

    public function getProvider(Request $request, $provider_id) {
        return response()->json(
            Provider::query()->where('id', $provider_id)->first() ?? null
        );
    }
}
