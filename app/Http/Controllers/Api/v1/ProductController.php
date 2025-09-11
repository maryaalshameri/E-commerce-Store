<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function __construct()
    {
        // حماية طرق الإنشاء والتعديل والحذف
        $this->middleware('auth:sanctum')->only(['store','update','destroy']);
    }

    // GET /api/v1/products
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(15);
        return ProductResource::collection($products);
    }

    // GET /api/v1/products/{product}
    public function show(Product $product)
    {
        return new ProductResource($product->load('category'));
    }

    // POST /api/v1/products
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'on_sale' => 'boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $product = Product::create($data);

        return (new ProductResource($product))->response()->setStatusCode(201);
    }

    // PUT/PATCH /api/v1/products/{product}
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:191',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'on_sale' => 'boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $product->update($data);

        return new ProductResource($product);
    }

    // DELETE /api/v1/products/{product}
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
