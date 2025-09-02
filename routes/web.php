<?php
use App\Http\Controllers\ShopControllar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ShopControllar::class,'index']);


