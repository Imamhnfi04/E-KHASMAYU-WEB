<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
<<<<<<< Updated upstream
use App\Http\Controllers\KategoriController;
=======
use App\Http\Controllers\RegisterpenjualController;
>>>>>>> Stashed changes

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
    return view('home.index');
});

// Route::get('/registerpenjual', function () {
//     return view('views/auth/registerpenjual.blade.php');
// });

Route::get('/registerpenjual', [registerpenjualController::class,'index']);
Route::post('/registerpenjuals', [registerpenjualController::class,'create']);

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
Route::post("/kategori", [KategoriController::class, 'store']); 