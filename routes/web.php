<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Datakad3Controller;
use App\Http\Controllers\McController;
use App\Http\Controllers\TodoController;
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
    Route::post('/login', [AuthController::class, 'loginreq']);
    Route::post('/store', [AuthController::class, 'registerreq']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return redirect('/admin');
    });
    Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');

    Route::post('/task', [TodoController::class, 'index']);
    Route::post('/taskdel/{id}', [TodoController::class, 'del']);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/tambahkadreq', [Datakad3Controller::class, 'tambahReq']);
    Route::post('/editkadreq', [Datakad3Controller::class, 'editReq']);
    Route::post('/kadhapus/{id}', [Datakad3Controller::class, 'hapus']);

    Route::post('/tambahmcreq', [McController::class, 'tambahReq']);
    Route::post('/editmcreq', [McController::class, 'editReq']);
    Route::post('/mchapus/{id}', [McController::class, 'hapus']);
});

Route::middleware(['IsTamu'])->group(
    function () {
        Route::get('/sesi', [AuthController::class, 'login'])->name('login');
        Route::get('/sesireg', [AuthController::class, 'register']);
    }
);

Route::middleware(['IsLogin'])->group(
    function () {
        Route::get('/datakad3', [Datakad3Controller::class, 'index']);
        Route::get('/tambahkad', [Datakad3Controller::class, 'tambah']);
        Route::get('/kadedit/{id}', [Datakad3Controller::class, 'edit']);

        Route::get('/mastercontrol', [McController::class, 'index']);
        Route::get('/tambahmc', [McController::class, 'tambah']);
        Route::get('/mcedit/{id}', [McController::class, 'edit']);
    }
);
