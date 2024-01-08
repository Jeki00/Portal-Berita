<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $ads = Iklan::where('letak','utama')
        ->where('tanggal_keluar','<',now())
        ->where('tanggal_hilang','>', now())->get();

        // dd($ads);

        return view('home', compact('ads'));
    }
}
