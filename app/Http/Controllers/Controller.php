<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function pencarian()
    {
        return view('pencarian');
    }
    public function detail()
    {
        return view('detail');
    }

    # User
    public function profil()
    {
        return view('profil');
    }
    public function editAkun()
    {
        return view('edit-akun');
    }
    public function buatPostingan()
    {
        return view('buat-postingan');
    }
    public function draft()
    {
        return view('draft');
    }
    public function reviewDraft()
    {
        return view('review-draft');
    }
    public function postinganku()
    {
        return view('postinganku');
    }
    public function pemberitahuan()
    {
        return view('pemberitahuan');
    }
    public function dompet()
    {
        return view('dompet');
    }
    public function formWithdraw()
    {
        return view('form-withdraw');
    }
    public function withdraw()
    {
        return view('withdraw');
    }

    #admin
    public function daftarBerita()
    {
        return view('daftar-berita');
    }
    public function reviewBerita()
    {
        return view('review-berita');
    }
    public function withdrawRequest()
    {
        return view('withdraw-request');
    }
    public function detailRequest()
    {
        return view('detail-request');
    }
    public function iklan()
    {
        return view('iklan');
    }
    public function tambahIklan()
    {
        return view('tambah-iklan');
    }
    public function editIklan()
    {
        return view('edit-iklan');
    }

    #Bendahara
    public function requestWithdraw()
    {
        return view('request-withdraw');
    }
    public function detailWithdraw()
    {
        return view('detail-withdraw');
    }
    public function uangMasuk()
    {
        return view('uang-masuk');
    }
    public function tambahPemasukan()
    {
        return view('tambah-pemasukan');
    }
    public function editPemasukan()
    {
        return view('edit-pemasukan');
    }
    public function uangKeluar()
    {
        return view('uang-keluar');
    }
    public function tambahPengeluaran()
    {
        return view('tambah-pengeluaran');
    }
    public function editPengeluaran()
    {
        return view('edit-pengeluaran');
    }
    public function laporan()
    {
        return view('laporan');
    }
}
