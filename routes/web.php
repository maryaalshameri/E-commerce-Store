<?php
use App\Http\Controllers\ShopControllar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreControllar;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ShopControllar::class,'index']);
Route::get('/products',[StoreControllar::class,'products']);

Route::get('/product/{id}', [StoreControllar::class, 'productDetails']);
Route::get('/about', [StoreControllar::class, 'about']);
Route::get('/Contact', [StoreControllar::class, 'contact']);
