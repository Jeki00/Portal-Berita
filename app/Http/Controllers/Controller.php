<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Models;
use App\Models\UangMasuk;
use App\Models\UangKeluar;
use App\Models\Iklan;
use App\Models\Review;
use App\Models\Draft;
use App\Models\Berita;
use App\Models\Dompet;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function pencarian(Request $req)
    {
        $news = Berita::with('review.draft')->where('isi','like','%'.$req->cari.'%')->get();
        return view('semua-berita',compact('news'));
    }
    public function detail(string $id)
    {
        $today = Carbon::now()->toDateString();
        $dompet = Dompet::firstOrNew(['tanggal' => $today,'id_berita'=>$id]);
        $dompet->view += 1;
        $dompet->status = 'unwithdraw';
        $dompet->save();

        $ads = Iklan::where('tanggal_keluar','<',now())
        ->where('tanggal_hilang','>',now())->get();
        
        $berita = DB::table('drafts as d')
        ->join('reviews as r', 'r.id_draft', '=', 'd.id')
        ->join('beritas as b', 'b.id_review', '=', 'r.id')
        ->select('d.thumbnail','d.judul', 'd.isi',)
        ->where('d.id','=',$id)
        ->groupBy('b.id')
        ->get();

        // dd($berita);
        
        return view('detail',compact('ads','berita'));

        

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

    public function showThumbnail($imageName)
    {
        $path = public_path('upload/' . $imageName);

        return response()->file($path);
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
    public function semua()
	{
        $ads = Iklan::where('letak','utama')
        ->where('tanggal_keluar','<',now())
        ->where('tanggal_hilang','>', now())->get();

        $news = DB::table('beritas as b')
        ->join('reviews as r', 'r.id', '=', 'b.id_review')
        ->join('drafts as d', 'r.id_draft', '=', 'd.id')
        ->select('d.judul', 'd.thumbnail','d.id')
        ->where('r.status', '=', 'diterima')
        ->get();

        // dd($news);
        // $news = $berita->paginate(20);
		return view('semua-berita',compact('ads','news'));
	}
}
