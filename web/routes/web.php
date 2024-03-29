<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('halaman-login', [HalamanController::class, 'login'])->name('login');

Route::get('halaman-buku', [HalamanController::class, 'buku'])->name('buku');

Route::get('halaman-about', [HalamanController::class, 'about'])->name('about');