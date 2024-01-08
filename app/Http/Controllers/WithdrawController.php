<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeUnitReverseLookup\Wizard;

class WithdrawController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $withdraw = Withdraw::where('created_by', $user->id)->get();
        return view('withdraw', ['withdraws' => $withdraw]);
    }

    public function indexAdmin()
    {

        $withdraw = Withdraw::all();
        return view('withdraw-request', ['withdraws' => $withdraw]);
    }
    public function indexBendahara()
    {

        $withdraw = Withdraw::where('status', 'disetujui')->get();
        return view('request-withdraw', ['withdraws' => $withdraw]);
    }

    public function show($id)
    {
        $detail = Withdraw::find($id);
        $dompets = Dompet::with(['berita.review.draft'])->where('kode_request', $detail->kode_request)->get();
        return view('detail-request', ['details' => $detail, 'dompets' => $dompets]);
    }
    public function showBendahara($id)
    {
        $detail = Withdraw::find($id);
        return view('detail-withdraw', ['details' => $detail]);
    }

    public function update(Request $request)
    {

        $withdraw = Withdraw::find($request->input('withdraw_id'));
        $dompets = Dompet::where('kode_request', $withdraw->kode_request)->get();
        $withdraw->tanggal_pembayaran = $request->input('tgl-maks-kirim');

        // Determine the action based on the button pressed
        $action = $request->input('action');

        if ($action === 'tolak') {

            foreach ($dompets as $dompet) {
                $dompet->status = 'unwithdraw';
                $dompet->save();
            }
            $withdraw->status = 'ditolak';
            $withdraw->save();
            return redirect()->route('withdrawRequest');
        } elseif ($action === 'setuju') {
            $withdraw->status = 'disetujui';
            $withdraw->save();
            return redirect()->route('withdrawRequest');
        }

        return redirect()->route('daftarBerita')->with('error', 'Invalid action.');
    }
    public function updateBendahara(Request $request)
    {

        $withdraw = Withdraw::find($request->input('withdraw_id'));
        $dompets = Dompet::where('kode_request', $withdraw->kode_request)->get();

        foreach ($dompets as $dompet) {
            $dompet->status = 'withdrawed';
            $dompet->save();
        }

        $withdraw->status = 'selesai';
        $withdraw->save();


        return redirect()->route('requestWithdraw')->with('error', 'Invalid action.');
    }
}
