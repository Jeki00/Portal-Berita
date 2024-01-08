<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\IklanController;

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

Route::resource('berita', BeritaController::class);
Route::resource('draft', DraftController::class);
Route::resource('iklan', IklanController::class);
Route::get('/edit-akun', [App\Http\Controllers\Controller::class, 'editAkun'])->name('editAkun');
Route::get('/buat-postingan', [App\Http\Controllers\Controller::class, 'buatPostingan'])->name('buatPostingan');
Route::post('/buat-postingan', [App\Http\Controllers\DraftController::class, 'create'])->name('buatDraft');
Route::get('/thumbnails/{imageName}', [App\Http\Controllers\Controller::class, 'showThumbnail'])->name('thumbnail.show');
Route::get('/draft', [App\Http\Controllers\DraftController::class, 'index'])->name('draft');
Route::get('/review-draft/{id}', [App\Http\Controllers\DraftController::class, 'show'])->name('reviewDraft');
Route::post('/review-draft', [App\Http\Controllers\DraftController::class, 'update'])->name('updateDraft');
Route::get('/postinganku', [App\Http\Controllers\ReviewController::class, 'index'])->name('postinganku');
Route::get('/pemberitahuan', [App\Http\Controllers\Controller::class, 'pemberitahuan'])->name('pemberitahuan');
Route::get('/dompet', [App\Http\Controllers\DompetController::class, 'index'])->name('dompet');
Route::post('/dompet', [App\Http\Controllers\DompetController::class, 'store'])->name('storeSelectedRows');
Route::post('/form-withdraw', [App\Http\Controllers\DompetController::class, 'formWith'])->name('formWithdraw');
Route::get('/withdraw', [App\Http\Controllers\WithdrawController::class, 'index'])->name('withdraw');

#admin
Route::get('/daftar-berita', [App\Http\Controllers\ReviewController::class, 'indexAdmin'])->name('daftarBerita');
Route::get('/review-berita/{id}', [App\Http\Controllers\ReviewController::class, 'reviewAdmin'])->name('reviewBerita');
Route::post('/review-berita', [App\Http\Controllers\ReviewController::class, 'update'])->name('updateBerita');
Route::get('/withdraw-request', [App\Http\Controllers\WithdrawController::class, 'indexAdmin'])->name('withdrawRequest');
Route::get('/detail-request/{id}', [App\Http\Controllers\WithdrawController::class, 'show'])->name('detailRequest');
Route::post('/detail-request', [App\Http\Controllers\WithdrawController::class, 'update'])->name('postRequest');
Route::get('/iklan', [App\Http\Controllers\Controller::class, 'iklan'])->name('iklan');
Route::get('/tambah-iklan', [App\Http\Controllers\Controller::class, 'tambahIklan'])->name('tambahIklan');
Route::get('/edit-iklan', [App\Http\Controllers\Controller::class, 'editIklan'])->name('editIklan');

#Bendahara
Route::get('/request-withdraw', [App\Http\Controllers\WithdrawController::class, 'indexBendahara'])->name('requestWithdraw');
Route::get('/detail-withdraw/{id}', [App\Http\Controllers\WithdrawController::class, 'showBendahara'])->name('detailWithdraw');
Route::post('/detail-withdraw', [App\Http\Controllers\WithdrawController::class, 'updateBendahara'])->name('prosesWithdraw');
Route::get('/uang-masuk', [App\Http\Controllers\Controller::class, 'uangMasuk'])->name('uangMasuk');
Route::get('/tambah-pemasukan', [App\Http\Controllers\Controller::class, 'tambahPemasukan'])->name('tambahPemasukan');
Route::get('/edit-pemasukan', [App\Http\Controllers\Controller::class, 'editPemasukan'])->name('editPemasukan');
Route::get('/uang-keluar', [App\Http\Controllers\Controller::class, 'uangKeluar'])->name('uangKeluar');
Route::get('/tambah-pengeluaran', [App\Http\Controllers\Controller::class, 'tambahPengeluaran'])->name('tambahPengeluaran');
Route::get('/edit-pengeluaran', [App\Http\Controllers\Controller::class, 'editPengeluaran'])->name('editPengeluaran');
Route::get('/laporan', [App\Http\Controllers\Controller::class, 'laporan'])->name('laporan');


// routes/web.php
