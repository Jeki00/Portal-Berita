<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pencarian', [App\Http\Controllers\Controller::class, 'pencarian'])->name('pencarian');
Route::get('/detail', [App\Http\Controllers\Controller::class, 'detail'])->name('detail');
Route::get('/profil', [App\Http\Controllers\Controller::class, 'profil'])->name('profil');
