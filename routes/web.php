<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home;
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

Route::get('/',[home::class,'index']);
Route::prefix('shopcart')->group(function (){
    Route::get('/addcart/{id}', [ShopCartController::class, 'add_shop']);
    Route::get('/', [ShopCartController::class, 'index'])->name('shop');
});

