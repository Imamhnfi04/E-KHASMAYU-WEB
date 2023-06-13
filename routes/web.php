<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TokoController;
// use App\Http\Controllers\PostprodukController;
use App\Http\Controllers\ProductController;

  





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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('admin');
});

// Route::get('/registerpenjual', function () {
//     return view('views/auth/registerpenjual.blade.php');
// });

Route::resource('/registerpenjual', RegisterController::class);

// Route::get('/', function () {
//     return view('view/admin/footer');
// });

// Route::get('/', function () {
//     return view('view/admin/header');
// });

// Route::get('/', function () {
//     return view('view/admin/navbar');
// });

// Route::get('/', function () {
//     return view('view/admin/script');
// });

// Route::get('/', function () {
//     return view('view/admin/sidebar');
// });
// Route::resource('post', 'App\Http\Controllers\PostController');


Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product/store', [ProductController::class,'store']);
Route::get('/product/destroy/{id}', [ProductController::class,'destroy']);

// Auth::routes();

Route::resource('/product', ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/toko1', [TokoController::class, 'toko1'])->name('toko1');

