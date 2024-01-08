<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\UangMasuk;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Exports\PemasukanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasukan = UangMasuk::all();

        // dd($pemasukan);
        return view('uang-masuk', compact('pemasukan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-pemasukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required|numeric'
        ]);

        $id = IdGenerator::generate(['table' => 'uang_masuks','field'=>'id' ,'length' => 15, 'prefix' =>'pemasukan-']);
        

        UangMasuk::create([
            'id'=>$id,
            'tanggal'=>$request['tanggal'],
            'keterangan'=>$request['keterangan'],
            'nominal'=>$request['nominal']
        ]);

        return redirect('/uang-masuk');
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
        $pemasukan = UangMasuk::find($id);

        return view('edit-pemasukan',compact('pemasukan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required|numeric'
        ]);
        
        UangMasuk::find($id)->update([
            'tanggal'=>$request['tanggal'],
            'keterangan'=>$request['keterangan'],
            'nominal'=>$request['nominal']
        ]);

        return redirect('/uang-masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UangMasuk::destroy($id);

        return redirect('/uang-masuk');
    }

    public function cetakPDF()
    {
        $pemasukan = UangMasuk::all();
        $total = 0;

        $pdf = PDF::loadview('pdf.uang-masuk-pdf', compact(['pemasukan', 'total']));
        // $pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-pemasukan.pdf');
    }

    public function cetakExcel(){
        return Excel::download(new PemasukanExport, 'pemasukan.xlsx');
    }
}
