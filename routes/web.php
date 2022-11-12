<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function(){
    Session::forget('user');
    return redirect()->route('user.login.form');
})->name('logout');
Route::get('/login', [UserController::class, 'loginForm'])->name('user.login.form');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cartList', [CartController::class, 'cartList'])->name('cartList');





