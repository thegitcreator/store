<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHome()
    {
        return view('index');
    }

    public function showCategories()
    {
        return view('categories');
    }

    public function showCategory($category)
    {
        return view('category', compact('category'));
    }

    public function showProduct($product = null)
    {
        return view('product', ['product' => $product]);
    }
}
