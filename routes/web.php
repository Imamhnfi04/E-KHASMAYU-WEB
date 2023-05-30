<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
//use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\penjual\RegisterpenjualController;

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

Route::get('/', function () {
    return view('index');
});

// Route::resource('/registerpenjual', RegisterController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registerpenjual', [RegisterpenjualController::class, 'index']);
Route::post('/registerpenjuals', [RegisterpenjualController::class, 'create']);


Route::get('/toko1', [TokoController::class, 'toko1'])->name('toko1');

Route::get('/basdat', function () {
    return view('penjual.dashboard');
});
// Route::post('/tambah-produk', [ProdukController::class, 'store']);

