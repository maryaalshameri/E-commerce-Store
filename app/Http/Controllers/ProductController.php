<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
   public function index()
        {
        $products = Product::latest()->get();
        return view('shop.products', compact('products'));
        }


    public function show($id)
        {
        $product = Product::findOrFail($id);
        return view('shop.products-details', compact('product'));
        }

    public function create()
        {
        return view('shop.create-product');
        }


    public function store(Request $request)
        {

        $data = $request->validate([
        'name' => 'required|string|min:2|max:100',
        'description' => 'required|string|max:1000',
        'price' => 'required|numeric|min:0',
        'on_sale' => 'nullable|boolean',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        //  $path = $request->file('image')->store('products', 'public');
        //   $data['image_path'] = 'storage/'.$path;
        if ($request->hasFile('image')) {
        // تأكد من إنشاء الرابط: php artisan storage:link
        $path = $request->file('image')->store('products', 'public');
        $data['image_path'] = 'storage/'.$path;
        }


        $data['on_sale'] = (bool)($data['on_sale'] ?? false);


       Product::create($data);


       return redirect()->route('products.index')->with('success','Product created successfully');
      }
}
