<?php
use App\Http\Controllers\ShopControllar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreControllar;
use App\Http\Controllers\ProductController;


Route::get('/',[ShopControllar::class,'index']);
// Route::get('/products',[StoreControllar::class,'products']);

// Route::get('/product/{id}', [StoreControllar::class, 'productDetails']);
Route::get('/about', [StoreControllar::class, 'about']);
Route::get('/Contact', [StoreControllar::class, 'contact']);


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');