<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    
    public function index(Category $category)
    {
        // $products = Product::paginate(8);
        // return view('frontend.product.index', compact('products', 'category'));
    //    $products = $category->products;
    //    return $products->paginate(3);
        // $cat = $category['id'];
        $products = Product::where('category_id','=',$category['id'])->paginate(8);
        return view('frontend.product.index', compact('products','category'));
    }

    public function show(Request $request, Product $product)
    {
        $path = $request->fullUrl();
        return view('frontend.product.show', compact('product','path'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
