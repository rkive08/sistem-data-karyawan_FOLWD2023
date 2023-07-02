<?php

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
    return view('home');
});

Route::resource('/pegawai', App\Http\Controllers\PegawaiController::class);
Route::get('pegawai/hapus/{id}', [\App\Http\Controllers\PegawaiController::class, 'destroy']);

