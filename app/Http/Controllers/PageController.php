<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function showMainPage()
    {
        // Get all products from the database
        $products = Product::all();

        // Pass the products to the Blade view
        return view('mainPage', compact('products'));
    }
}
