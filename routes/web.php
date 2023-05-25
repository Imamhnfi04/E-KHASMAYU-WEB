<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TokoController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/toko1', [TokoController::class, 'toko1'])->name('toko1');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
