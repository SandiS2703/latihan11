<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('Content.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('Content.register');
})->middleware('guest');

Route::post('/post-register', [RegisterController::class, 'store']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-home', function () {
        return view('Content.dashboard-home');
    });
});

Route::group(['middleware' => ['auth', 'rolecek:user,admin']], function () {
    Route::get('/dashboard-game', [GameController::class, 'index']);
    Route::get('/dashboard-kategori', [KategoriController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'rolecek:admin']], function () {
    Route::get('/dashboard-tambah-game', [GameController::class, 'create']);
    Route::post('/dashboard-tambah-game', [GameController::class, 'store']);
});

//print
Route::get('print-game', [GameController::class, 'print']);
