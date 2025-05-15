<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\registercontroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('master.master');
});
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/auth', [loginController::class, 'authenticate'])->name('auth');



// Rooute::group(["prefix" => "pegawai"])
//