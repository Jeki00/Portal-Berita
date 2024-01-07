<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models;
use App\Models\UangMasuk;
use App\Models\UangKeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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
        $hasil = $results = DB::table('uang_masuks')
        ->select('*')
        ->union(DB::table('uang_keluars')->select('*'))
        ->orderBy('tanggal')
        ->get();

        // $hasil = json_decode($hasil);
        // dd($hasil);  
        $total=0;
        return view('laporan', compact(['hasil','total']));
    }

    public function cetakPDF()
    {
        $hasil = $results = DB::table('uang_masuks')
        ->select('*')
        ->union(DB::table('uang_keluars')->select('*'))
        ->orderBy('tanggal')
        ->get();
        $total=0;


        $pdf = PDF::loadview('pdf.laporan-pdf', compact(['hasil', 'total']));
        // $pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-keuangan.pdf');
    }

    public function cetakExcel()
	{
		return Excel::download(new LaporanExport, 'laporan.xlsx');
	}
}
