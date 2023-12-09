<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function files(Request $request, Product $product){
        $url = Storage::put('public/products', $request->file('file'));

        
        $product->images()->create([
            'url' => $url
        ]);
    }
}
