<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        return view('products', [
            'products' => Product::latest()->paginate(6),
            'lastproduct' => Product::latest()->first(),
            'categories' => Category::all(),
        ]);
    }

    public function latest() 
    {
        return view('index', [
            'products' => Product::latest(3),
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }



}

