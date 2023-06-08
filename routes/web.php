<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\pembeli\KeranjangController;
use App\Http\Controllers\pembeli\ProfileController;
use App\Http\Controllers\penjual\RegisterpenjualController;
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
    return view('index');
});

// Route::resource('/registerpenjual', RegisterController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registerpenjual', [RegisterpenjualController::class, 'index']);

Route::post('/registerpenjuals', [RegisterpenjualController::class, 'create']);


Route::middleware('auth','user-access:pembeli')->group(function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('pembeli.profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('pembeli.profile.update');
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('pembeli.keranjang');
});

Route::get('/toko1', [TokoController::class, 'toko1'])->name('toko1');

Route::get('/basdat', function () {
    return view('penjual.dashboard');
});

// Route::get('/', function () {
//     return view('admin');
// });
