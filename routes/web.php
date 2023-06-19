<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TokoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DetailTokoController;
use App\Http\Controllers\pembeli\CheckoutController;
use App\Http\Controllers\pembeli\ContactController;
use App\Http\Controllers\pembeli\KeranjangController;
use App\Http\Controllers\pembeli\ProdukController;
use App\Http\Controllers\pembeli\ProfileController;
use App\Http\Controllers\pembeli\TokoController;
use App\Http\Controllers\penjual\PenjualController;
use App\Http\Controllers\penjual\RegisterpenjualController;
use App\Http\Controllers\penjual\TokoPenjualController;
use App\Http\Controllers\ProductController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('layouts.dashboard');
})->name('/');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registerpenjual', [RegisterpenjualController::class, 'index']);

Route::post('/registerpenjuals', [RegisterpenjualController::class, 'create']);

//Route::get('/produks', [ProdukController::class, 'index'])->name('pembeli.produk');
Route::get('/detailproduk', [ProdukController::class, 'detail'])->name('detailproduk');

Route::get('/tokos', [TokoController::class, 'index'])->name('pembeli.toko');

Route::get('/detailtoko', [DetailTokoController::class, 'index'])->name('detailtoko');


Route::get('/contact', [ContactController::class, 'index'])->name('pembeli.contact');

Route::resource('/product', ProductController::class);
Route::resource('/produks', ProdukController::class);




Route::middleware('auth','user-access:pembeli')->group(function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('pembeli.profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('pembeli.profile.update');
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('pembeli.keranjang');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('pembeli.checkout');
});

Route::middleware('auth', 'user-access:penjual')->group(function(){
    Route::get('/dashboard', [PenjualController::class, 'index'])->name('penjual.dashboard');
    Route::get('/toko', [TokoPenjualController::class, 'index'])->name('penjual.toko');
});

