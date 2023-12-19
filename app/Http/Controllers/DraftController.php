<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Draft;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user = Auth::user();
        $drafts = $user->drafts;
        
        return view('', compact($drafts));

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
        // $draft = new Draft;
        // $draft->judul = $request->judul;

        if ($request->hasFile('thumbnail')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/thumbnail', request()->file('thumbnail'));
        }

        Draft::create([
            'thumbnail'=>$filePath,
            'judul'=>$request->judul,
            'kata_kunci'=>$request->kata_kunci,
            'isi'=>$request->isi,
            'created_by'=>$request->user_id
        ]);

        return view('');

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
