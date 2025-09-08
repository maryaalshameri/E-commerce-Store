<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class AdminController extends Controller
{
        public function dashboard()
    {
        $productCount  = Product::count();
        $categoryCount = Category::count();

        return view('admin.dashboard', compact('productCount','categoryCount'));
    }

    // عرض المنتجات في لوحة الإدارة
    public function products()
    {
        $products = Product::with('category')->latest()->paginate(15);
        return view('admin.products', compact('products'));
    }

    // عرض الأقسام في لوحة الإدارة
    public function categories()
    {
        $categories = Category::withCount('products')->orderBy('name')->paginate(15);
        return view('admin.categories', compact('categories'));
    }
}
