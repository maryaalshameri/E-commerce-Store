<?php
use App\Http\Controllers\ShopControllar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreControllar;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/',[ShopControllar::class,'index']);
// Route::get('/products',[StoreControllar::class,'products']);

// Route::get('/product/{id}', [StoreControllar::class, 'productDetails']);
Route::get('/about', [StoreControllar::class, 'about']);
Route::get('/contact', [StoreControllar::class, 'contact']);


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); 
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route::resource('products', ProductController::class);

