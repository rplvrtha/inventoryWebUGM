<?php

// app/Http/Controllers/DashboardController.php

use App\Http\Controllers\Controller;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $totalPrice = Product::sum('price');

        return view('dashboard', compact('productCount', 'totalPrice'));
    }
}

