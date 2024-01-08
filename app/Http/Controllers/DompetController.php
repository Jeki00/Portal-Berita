<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dompet;
use App\Models\User;
use App\Models\Review;
use App\Models\Berita;
use App\Models\Withdraw;

class DompetController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $dompets = Dompet::with(['berita.review.draft'])
            ->whereHas('berita.review.draft', function ($query) use ($user) {
                $query->where('created_by', $user->id);
            })
            ->where('status', 'unwithdraw')
            ->get();


        return view('dompet', ['dompets' => $dompets]);
    }

    public function store(Request $request)
    {
        $selectedRows = $request->input('selected_rows', []);

        $rows = Dompet::whereIn('id', $selectedRows)->get();
        $user = Auth::user();

        $withdraws = Withdraw::where('created_by', $user->id)->first();

        return view('form-withdraw', ['rows' => $rows, 'withdraws' => $withdraws]);
    }

    public function formWith(Request $request)
    {

        $selectedRows = $request->input('selected_rows', []);
        $rows = Dompet::whereIn('id', $selectedRows)->get();

        // Find the current maximum kode_request value
        $maxKodeRequest = Withdraw::max('kode_request');

        // Extract the numerical part and increment it
        $numericalPart = intval(substr($maxKodeRequest, 1));
        $nextNumericalPart = $numericalPart + 1;

        // Create the new kode_request
        $newKodeRequest = 'R' . str_pad($nextNumericalPart, 4, '0', STR_PAD_LEFT);

        foreach ($rows as $row) {
            $row->kode_request = $newKodeRequest;
            $row->status = 'semi-withdraw';
            $row->save();
        }

        $user = Auth::user();


        $withdraw = new Withdraw();
        $withdraw->kode_request = $newKodeRequest;
        $withdraw->no_rekening = $request->no_rek;
        $withdraw->nama_pemilik_kartu = $request->name;
        $withdraw->negara = $request->negara;
        $withdraw->nominal = $request->nominal;
        $withdraw->status = 'menunggu';
        $withdraw->created_by = $user->id;
        $withdraw->save();

        return redirect()->route('withdraw')->with('success', 'Draft berita berhasil disimpan.');
    }
}
