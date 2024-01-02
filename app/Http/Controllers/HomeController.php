<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::all();

        return Inertia::render('Home', [
            'products' => $products
        ]);
    }
}
