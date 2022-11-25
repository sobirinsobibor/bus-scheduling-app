<?php

use App\Http\Controllers\DetailJadwalController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DetailPeminjamanController;
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
    return view('dashboard.dashboard');
});

Route::resource('/dashboard/schedule', DetailJadwalController::class);
Route::resource('/dashboard/loan', PeminjamanController::class);
Route::resource('/dashboard/loan-detail', DetailPeminjamanController::class);