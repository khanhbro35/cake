<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home;

use App\Http\Controllers\shop;

use App\Http\Controllers\shop_detail;

use App\Http\Controllers\ShopCartController;
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

Route::get('/',[home::class,'index'])->name('home');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::prefix('shopcart')->group(function (){
    Route::get('/addcart/{id}', [ShopCartController::class, 'add_shop']);
    Route::get('/', [ShopCartController::class, 'index'])->name('shop_cart');
    Route::post('/updatecart', [ShopCartController::class, 'update_shop']);
});

Route::prefix('shop')->group(function(){
    Route::get('/', [shop::class,'index'])->name('shop');
    Route::get('/{category_id}', [Shop::class, 'get_by_category']);
    Route::post('/search', [shop::class, 'search']);
});

Route::prefix('shop_detail')->group(function(){
    Route::get('/{id}',[shop_detail::class, 'index']);
    Route::post('/addcart', [shop_detail::class, 'add_cart']);
});
