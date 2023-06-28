<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHome()
    {
        return view('index');
    }

    public function showCategories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function showCategory($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function showProduct($category, $product = null)
    {
        return view('product', ['product' => $product]);
    }

    public function basket()
    {
        return view('basket');
    }

    public function makeOrder()
    {
        return view('order');
    }
}
