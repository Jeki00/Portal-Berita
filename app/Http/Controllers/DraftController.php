<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models;
use App\Models\Draft;



class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    
        
        return view('draft');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('buat-postingan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $user = Auth::user();

        // dd($request);

        $fileName = time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->storeAs('public/images/thumbnail', $fileName);
        
        Draft::create([
            'thumbnail'=>$fileName,
            'judul'=>$request->judul,
            'kata_kunci'=>$request->kunci,
            'isi'=>$request->isi,
            'status'=>'simpan',
            'created_by'=>$user->id
        ]);
        
        // if ($request->hasFile('thumbnail')) {
        //     // put image in the public storage
        //     $filePath = Storage::disk('public')->put('images/posts/thumbnail', request()->file('thumbnail'));
        // }




        return redirect()->route('draft');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $draft = Draft::find($id);
        return view('', compact($draft));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $draft = Draft::find($id);
        return view('', compact($draft));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->hasFile('thumbnail')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/thumbnail', request()->file('thumbnail'));
        }
        $draft = Draft::find($id)->update([
            'thumbnail'=>$filePath,
            'judul'=>$request->judul,
            'kata_kunci'=>$request->kata_kunci,
            'isi'=>$request->isi,
            'created_by'=>$request->user_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Draft::destroy($id);
        return redirect()->route('');
    }
}
