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

# User
Route::get('/profil', [App\Http\Controllers\Controller::class, 'profil'])->name('profil');
Route::get('/edit-akun', [App\Http\Controllers\Controller::class, 'editAkun'])->name('editAkun');
Route::get('/buat-postingan', [App\Http\Controllers\Controller::class, 'buatPostingan'])->name('buatPostingan');
Route::get('/draft', [App\Http\Controllers\Controller::class, 'draft'])->name('draft');
Route::get('/review-draft', [App\Http\Controllers\Controller::class, 'reviewDraft'])->name('reviewDraft');
Route::get('/postinganku', [App\Http\Controllers\Controller::class, 'postinganku'])->name('postinganku');
Route::get('/pemberitahuan', [App\Http\Controllers\Controller::class, 'pemberitahuan'])->name('pemberitahuan');
Route::get('/dompet', [App\Http\Controllers\Controller::class, 'dompet'])->name('dompet');
Route::get('/form-withdraw', [App\Http\Controllers\Controller::class, 'formWithdraw'])->name('formWithdraw');
Route::get('/withdraw', [App\Http\Controllers\Controller::class, 'withdraw'])->name('withdraw');

#admin
Route::get('/daftar-berita', [App\Http\Controllers\Controller::class, 'daftarBerita'])->name('daftarBerita');
Route::get('/review-berita', [App\Http\Controllers\Controller::class, 'reviewBerita'])->name('reviewBerita');
Route::get('/withdraw-request', [App\Http\Controllers\Controller::class, 'withdrawRequest'])->name('withdrawRequest');
Route::get('/detail-request', [App\Http\Controllers\Controller::class, 'detailRequest'])->name('detailRequest');
Route::get('/iklan', [App\Http\Controllers\Controller::class, 'iklan'])->name('iklan');
Route::get('/edit-iklan', [App\Http\Controllers\Controller::class, 'tambahIklan'])->name('tambahIklan');
Route::get('/edit-iklan', [App\Http\Controllers\Controller::class, 'editIklan'])->name('editIklan');

#Bendahara
Route::get('/request-withdraw', [App\Http\Controllers\Controller::class, 'requestWithdraw'])->name('requestWithdraw');
Route::get('/detail-withdraw', [App\Http\Controllers\Controller::class, 'detailWithdraw'])->name('detailWithdraw');
Route::get('/uang-masuk', [App\Http\Controllers\Controller::class, 'uangMasuk'])->name('uangMasuk');
Route::get('/tambah-pemasukan', [App\Http\Controllers\Controller::class, 'tambahPemasukan'])->name('tambahPemasukan');
Route::get('/edit-pemasukan', [App\Http\Controllers\Controller::class, 'editPemasukan'])->name('editPemasukan');
Route::get('/uang-keluar', [App\Http\Controllers\Controller::class, 'uangKeluar'])->name('uangKeluar');
Route::get('/tambah-pengeluaran', [App\Http\Controllers\Controller::class, 'tambahPengeluaran'])->name('tambahPengeluaran');
Route::get('/edit-pengeluaran', [App\Http\Controllers\Controller::class, 'editPengeluaran'])->name('editPengeluaran');
Route::get('/laporan', [App\Http\Controllers\Controller::class, 'laporan'])->name('laporan');
