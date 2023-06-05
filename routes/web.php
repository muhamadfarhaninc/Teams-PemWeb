<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
    return view('halaman_depan.root');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/sesi', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginreq']);
    Route::get('/sesireg', [AuthController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::get('/home', function () {
    return redirect('/admin');
});


Route::get('/dash', [DashboardController::class, 'index']);
