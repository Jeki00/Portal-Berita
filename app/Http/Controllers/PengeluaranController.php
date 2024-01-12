<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models;
use App\Models\UangKeluar;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Exports\PengeluaranExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PengeluaranController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pengeluaran = UangKeluar::query();

        $tgl_awal= $request->query('tanggal_mulai');
        $tgl_akhir= $request->query('tanggal_berakhir');
        
        if($request->query('tanggal_mulai')){
            $pengeluaran = $pengeluaran->where('tanggal','>=',$tgl_awal);
        }
        if($request->query('tanggal_berakhir')){
            $pengeluaran = $pengeluaran->where('tanggal','<=',$tgl_akhir);
        }

        $pengeluaran = $pengeluaran->get();

        return view('uang-keluar', compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-pengeluaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $id = IdGenerator::generate(['table' => 'uang_keluars', 'length' => 17, 'prefix' =>'pengeluaran-']);

        UangKeluar::create([
            'id'=>$id,
            'tanggal'=>$request['tanggal'],
            'keterangan'=>$request['keterangan'],
            'nominal'=>$request['nominal']
        ]);

        return redirect('/uang-keluar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pengeluaran = UangKeluar::find($id);

        return view('edit-pengeluaran', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        UangKeluar::find($id)->update([
            'tanggal'=>$request['tanggal'],
            'keterangan'=>$request['keterangan'],
            'nominal'=>$request['nominal']
        ]);

        return redirect('/uang-keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UangKeluar::destroy($id);

        return redirect('/uang-keluar');
    }

    public function cetakPDF()
    {
        $pengeluaran = UangKeluar::all();
        $total = 0;

        $pdf = PDF::loadview('pdf.uang-keluar-pdf', compact(['pengeluaran', 'total']));
    	return $pdf->download('laporan-pengeluaran.pdf');
    }
    public function cetakExcel(){
        return Excel::download(new PengeluaranExport, 'pengeluaran.xlsx');
    }
}
