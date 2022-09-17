<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/login', [UserController::class,'login']);
Route::post('/register', [UserController::class,'register']);

Route::get('/logout',function(){
    Session::forget('user');
    Auth::logout();
    return redirect('login');
});

Route::get('/', [ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);

Route::post('add_to_cart', [ProductController::class,'addToCart']);
Route::get('/cartlist', [ProductController::class,'cartList']);

Route::get("removecart/{id}",[ProductController::class,'removeCart']);

Route::get("/products",[ProductController::class,'listProducts']);
Route::get("products/{id}",[ProductController::class,'listProductsPaginate']);


