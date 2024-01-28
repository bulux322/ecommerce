<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $query = request('q');

        // Jika ada query, lakukan pencarian
        if($query) {
            $products = Product::where('name', 'like', '%' . $query . '%')
                                ->orWhere('description', 'like', '%' . $query . '%')
                                ->get();
        } else {
            // Jika tidak ada query, tampilkan semua produk
            $products = Product::paginate(12);
        }

        return view('index', ['products' => $products]);
    }
}
