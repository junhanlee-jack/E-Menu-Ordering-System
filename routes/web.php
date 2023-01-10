<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('mainPage');
});

Route::get('/insertNewCategory',function(){
    return view('insertNewCategory');
});

Route::post('/insertNewCategory/store',[App\Http\Controllers\FoodCategoryController::class,'add'])->name('insertNewCategory');

Route::get('/foodCategoryList',[App\Http\Controllers\FoodCategoryController::class,'view'])->name('foodCategoryList');

Route::get('/deleteFoodCategory/{id}',[App\Http\Controllers\FoodCategoryController::class,'delete'])->name('deleteFoodCategory');

Route::get('/insertNewItem',function(){
    return view('insertNewItem');
});

Route::post('/insertNewItem/store',[App\Http\Controllers\ItemController::class,'add'])->name('insertNewItem');

Route::get('/viewItemList',[App\Http\Controllers\ItemController::class,'view'])->name('viewItemList');

Route::get('/itemPage',[App\Http\Controllers\ItemController::class,'show'])->name('itemPage');

Route::get('/itemInformation/{id}',[App\Http\Controllers\ItemController::class,'showDetail'])->name('itemInformation');

Route::get('/deleteItem/{id}',[App\Http\Controllers\ItemController::class,'delete'])->name('deleteItem');
            

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'showMyCart'])->name('cart');

route::post('/addCart', [App\Http\Controllers\CartController::class, 'add'])->name('addCart');

Route::post('\checkout', [App\Http\Controllers\MakePaymentController::class, 'paymentPost'])->name('payment.post');

Route::post('/searchItem',[App\Http\Controllers\ItemController::class,'searchItem'])->name('searchItem');

Route::get('/deleteCart/{id}',[App\Http\Controllers\CartController::class,'delete'])->name('deleteCartItem');

Route::get('/orderList',[App\Http\Controllers\OrderController::class,'view'])->name('orderList');

Route::get('/prepareList',[App\Http\Controllers\CartController::class,'view'])->name('prepareList');
