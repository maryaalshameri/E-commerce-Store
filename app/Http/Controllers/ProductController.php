<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
class ProductController extends Controller
{
   public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $data['on_sale'] = (bool)($data['on_sale'] ?? false);

        if ($request->hasFile('image')) {
            // مهم: php artisan storage:link
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = 'storage/'.$path;
        }

        Product::create($data);
        return redirect()->route('products.index')->with('success', 'تم إنشاء المنتج بنجاح');
    }

    public function show(Product $product)
    {
        $product->load('category');
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('products.edit', compact('product','categories'));
    }

           public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $data['on_sale'] = (bool)($data['on_sale'] ?? false);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = 'storage/'.$path;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'تم تحديث المنتج بنجاح');
    }
        public function destroy($id)
        {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
        }
}








// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;
// class ProductController extends Controller
// {
//    public function index()
//         {
//         $products = Product::latest()->get();
//         return view('shop.products', compact('products'));
//         }


//     public function show($id)
//         {
//         $product = Product::findOrFail($id);
//         return view('shop.products-details', compact('product'));
//         }

//     public function create()
//         {
//         return view('shop.create-product');
//         }


//     public function store(Request $request)
//         {

//         $data = $request->validate([
//         'name' => 'required|string|min:2|max:100',
//         'description' => 'required|string|max:1000',
//         'price' => 'required|numeric|min:0',
//         'on_sale' => 'nullable|boolean',
//         'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//         ]);

//         //  $path = $request->file('image')->store('products', 'public');
//         //   $data['image_path'] = 'storage/'.$path;
//         if ($request->hasFile('image')) {
//         // تأكد من إنشاء الرابط: php artisan storage:link
//         $path = $request->file('image')->store('products', 'public');
//         $data['image_path'] = 'storage/'.$path;
//         }


//         $data['on_sale'] = (bool)($data['on_sale'] ?? false);


//        Product::create($data);


//        return redirect()->route('products.index')->with('success','Product created successfully');
//       }


//       public function edit($id)
//         {
//         $product = Product::findOrFail($id);
//         return view('shop.edit-product', compact('product'));
//         }


//         public function update(Request $request, $id)
//         {
//         $product = Product::findOrFail($id);


//         $data = $request->validate([
//         'name' => 'required|string|min:2|max:100',
//         'description' => 'required|string|max:1000',
//         'price' => 'required|numeric|min:0',
//         'on_sale' => 'nullable|boolean',
//         'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//         ]);


//         if ($request->hasFile('image')) {
//         $path = $request->file('image')->store('products', 'public');
//         $data['image_path'] = 'storage/'.$path;
//         }


//         $data['on_sale'] = (bool)($data['on_sale'] ?? false);


//         $product->update($data);


//         return redirect()->route('products.show', $product->id)->with('success','Product updated successfully');
//         }

//         public function destroy($id)
//         {
//         $product = Product::findOrFail($id);
//         $product->delete();
//         return redirect()->route('products.index')->with('success','Product deleted successfully');
//         }
// }




