<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;


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
Route::post('/pencarian', [App\Http\Controllers\Controller::class, 'pencarian'])->name('pencarian');
Route::get('/detail', [App\Http\Controllers\Controller::class, 'detail'])->name('detail');
Route::get('/semua', [App\Http\Controllers\Controller::class, 'semua'])->name('detail');

# User
Route::get('/profil', [App\Http\Controllers\Controller::class, 'profil'])->name('profil');

Route::resource('berita', BeritaController::class);
Route::resource('draft', DraftController::class);
Route::resource('iklan', IklanController::class);
Route::get('/edit-akun', [App\Http\Controllers\Controller::class, 'editAkun'])->name('editAkun');

//halmaan buat draft
Route::get('/draft', [App\Http\Controllers\DraftController::class, 'index'])->name('draft');
Route::get('/draft/create', [App\Http\Controllers\DraftController::class, 'create'])->name('buatPostingan');
Route::post('/draft', [App\Http\Controllers\DraftController::class, 'store'])->name('buatPostingan');



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

// iklan
Route::get('/iklan', [App\Http\Controllers\IklanController::class, 'index'])->name('iklan');
Route::get('/tambah-iklan', [App\Http\Controllers\IklanController::class, 'create'])->name('simpanIklan');
Route::post('/tambah-iklan', [App\Http\Controllers\IklanController::class, 'store']);
Route::get('/edit-iklan/{id}', [App\Http\Controllers\IklanController::class, 'edit'])->name('editIklan');
Route::post('/edit-iklan/{id}', [App\Http\Controllers\IklanController::class, 'update']);
Route::delete('/hapus-iklan/{id}', [App\Http\Controllers\IklanController::class, 'destroy'])->name('hapusIklan');

#Bendahara
Route::get('/request-withdraw', [App\Http\Controllers\Controller::class, 'requestWithdraw'])->name('requestWithdraw');
Route::get('/detail-withdraw', [App\Http\Controllers\Controller::class, 'detailWithdraw'])->name('detailWithdraw');

Route::get('/uang-masuk', [App\Http\Controllers\PemasukanController::class, 'index'])->name('uangMasuk');
Route::get('/tambah-pemasukan', [App\Http\Controllers\PemasukanController::class, 'create'])->name('tambahPemasukan');
Route::post('/tambah-pemasukan', [App\Http\Controllers\PemasukanController::class, 'store']);
Route::get('/edit-pemasukan/{id}', [App\Http\Controllers\PemasukanController::class, 'edit'])->name('editPemasukan');
Route::post('/edit-pemasukan/{id}', [App\Http\Controllers\PemasukanController::class, 'update']);
Route::delete('/hapus-pemasukan/{id}', [App\Http\Controllers\PemasukanController::class, 'destroy'])->name('hapusPemasukan');
Route::get('/pemasukan/pdf', [App\Http\Controllers\PemasukanController::class, 'cetakPDF']);
Route::get('/pemasukan/excel', [App\Http\Controllers\PemasukanController::class, 'cetakExcel']);

Route::get('/uang-keluar', [App\Http\Controllers\PengeluaranController::class, 'index'])->name('uangKeluar');
Route::get('/tambah-pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'create'])->name('tambahPengeluaran');
Route::post('/tambah-pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'store']);
Route::get('/edit-pengeluaran/{id}', [App\Http\Controllers\PengeluaranController::class, 'edit'])->name('editPengeluaran');
Route::post('/edit-pengeluaran/{id}', [App\Http\Controllers\PengeluaranController::class, 'update']);
Route::delete('/hapus-pengeluaran/{id}', [App\Http\Controllers\PengeluaranController::class, 'destroy'])->name('hapusPengeluaran');
Route::get('/pengeluaran/pdf', [App\Http\Controllers\PengeluaranController::class, 'cetakPDF']);
Route::get('/pengeluaran/excel', [App\Http\Controllers\PengeluaranController::class, 'cetakExcel']);

Route::get('/laporan', [App\Http\Controllers\Controller::class, 'laporan'])->name('laporan');
Route::get('/laporan/pdf', [App\Http\Controllers\Controller::class, 'cetakPDF']);
Route::get('/laporan/excel', [App\Http\Controllers\Controller::class, 'cetakExcel']);


// komentar
Route::get('/{berita_id}/komentar', [App\Http\Controllers\KomentarController::class, 'create'])->name('komentar');
