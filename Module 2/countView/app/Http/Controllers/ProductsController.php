<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function show($id)
    {
        $productKey = 'product_'.$id;
        if (!Session::has($productKey)) {
            Product::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }
        $product = Product::find($id);
        return view('show', compact('product'));
    }
}
