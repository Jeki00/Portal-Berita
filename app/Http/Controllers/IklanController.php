<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Iklan;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $iklan = Iklan::all();
        return view('');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('gambar')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan/gambar_iklan', request()->file('gambar'));
        }


        Iklan::create([
            'judul'=>$request->judul,
            'gambar'=>$filePath,
            'tanggal_keluar'=>$request->tanggal_keluar,
            'tanggal_hilang'=>$request->tanggal_hilang,
            'perusahaan'=>$request->perusahaan,
            'created_by'=>$request->created_by,
        ]);

        return view('');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $iklan = Iklan ::find($id);

        return view('',compact($iklan));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $iklan = Iklan ::find($id);

        return view('',compact($iklan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        if ($request->hasFile('gambar')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan/gambar_iklan', request()->file('gambar'));
        }

        $draft = Draft::find($id)->update([
            'judul'=>$request->judul,
            'gambar'=>$filePath,
            'tanggal_keluar'=>$request->tanggal_keluar,
            'tanggal_hilang'=>$request->tanggal_hilang,
            'perusahaan'=>$request->perusahaan,
            'created_by'=>$request->created_by,
        ]);

        return view('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Iklan::destroy($id);
        return redirect()->route('');
    }
}
