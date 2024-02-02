<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function (Request $request) {
    $products = new \App\Http\Controllers\ProductController;
    $cid = $request->query('cid');
    return view('pages.home', ['products' => $products->index($cid ? $cid : null)]);
})->name('home');

Route::get('/products/{id}', function (string $productId) {
    $products = new \App\Http\Controllers\ProductController;
    return view('pages.product', ['product' => $products->show($productId)]);
})->name('home');

Route::controller(\App\Http\Controllers\LoginRegisterController::class)->group(function () {
   Route::middleware('guest')->group(function () {
       Route::get('/login', 'index')->name('login');
       Route::get('/signup', 'create')->name('signup');

       Route::post('/user/create', 'store');
       Route::post('/user/login', 'update');
   });
   Route::middleware('auth')->group(function () {
       Route::post('/user/logout', 'destroy');
   });
});

Route::middleware('admin')->group(function () {
   Route::get('product/create', function () {
       return view('pages.add');
   });
   Route::controller(\App\Http\Controllers\ProductController::class)->group(function() {
       Route::post('product/add', 'store');
       Route::post('product/update', 'update');
       Route::post('product/delete', 'destroy');
   });
});
