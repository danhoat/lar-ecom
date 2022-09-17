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

// Route::get('/products', function () {
//     return view('products');
// });

Route::post('/login', [UserController::class,'login']);
Route::get('/logout',function(){
    Session::forget('user');
    Auth::logout();
    return redirect('login');
});

Route::get('/', [ProductController::class,'index']);
//Route::get('/detail', [ProductController::class,'detail']);

//Route::get("detail/{id}", function() {return "OK";});
Route::get("detail/{id}",[ProductController::class,'detail']);

Route::post('add_to_cart', [ProductController::class,'addToCart']);

