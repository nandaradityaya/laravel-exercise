<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::orderByDesc('id')->get();
    //     $products = Product::orderByDesc('id')->get();
    //     return view('welcome', compact(['categories', 'products']));
    // }

    public function index(Request $request)
    {
        $categories = Category::orderByDesc('id')->get();

        // Ambil query string 'q' dari request (jika ada)
        $searchQuery = $request->input('q');

        // Jika ada query pencarian, filter produk berdasarkan nama atau deskripsi
        if ($searchQuery) {
            $products = Product::where('name', 'like', '%' . $searchQuery . '%')
                                ->orWhere('description', 'like', '%' . $searchQuery . '%')
                                ->orderByDesc('id')
                                ->get();
        } else {
            // Jika tidak ada query pencarian, ambil semua produk
            $products = Product::orderByDesc('id')->get();
        }

        return view('welcome', compact(['categories', 'products']));
    }


    public function filterByCategory($category)
    {
        $categories = Category::orderByDesc('id')->get();
        $products = Product::where('category_id', $category)->orderByDesc('id')->get();
        
        return view('welcome', compact(['categories', 'products']));
    }

}
