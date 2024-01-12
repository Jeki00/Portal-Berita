<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $berita_id)
    {
        $user = Auth::user();

        // dd($user->id);

        Komentar::create([
            'id_berita'=>$berita_id,
            'created_by'=>$user->id,
            'komentar'=>$request->message,
        ]);
        // return redirect()->route('semua');
        return redirect("/detail/". $berita_id);
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
