<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LaporanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $hasil = $results = DB::table('uang_masuks')
        ->select('*')
        ->union(DB::table('uang_keluars')->select('*'))
        ->orderBy('tanggal')
        ->get();
        return $hasil;
    }
}
