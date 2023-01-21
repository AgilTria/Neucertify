<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;

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

Route::get('/contoh', function () {
    return view('contoh');
});
Route::get('/component', function () {
    return view('contohtailwind');
});
////////////////

Route::get('/', function () {
    return view('validasi_sertifikat');
});

Route::get('/instansi', function () {
    return view('instansi.index');
});
Route::get('/instansi/acara', function () {
    return view('instansi.acara');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/verification', function () {
    return view('admin.verification');
});
Route::get('/dashboard/edit', function () {
    return view('admin.edit');
});
Route::get('/register', function () {
    return view('instansi.register');
});

Route::get('login', [AuthController::class, 'login']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/acara',[App\Http\Controllers\AcaraController::class, 'index']);

// Route::get('/acara/create', [App\Http\Controllers\AcaraController::class, 'create']);

Route::resource('acara', AcaraController::class);
Route::get('acara.edit', [App\Http\Controllers\AcaraController::class, 'edit']);
// Route::get('acara.edit', AcaraController::class);
