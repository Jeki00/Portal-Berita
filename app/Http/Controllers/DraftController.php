<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draft;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Review;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $drafts = Draft::where('status', 'draft')->where('created_by', $user->id)->get();
        return view('draft', ['drafts' => $drafts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'kunci' => 'required',
            'isi' => 'required',
        ]);

        $news = new Draft;
        $news->judul = $request->judul;
        $news->kata_kunci = $request->kunci;
        $news->isi = $request->isi;
        $news->status = "draft";
        $news->created_by = $user->id;


        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('upload'), $thumbnailName);
            $news->thumbnail = $thumbnailName;
        }

        $news->save();

        return redirect()->route('draft')->with('success', 'Draft berita berhasil disimpan.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $user = Auth::user();

        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'kunci' => 'required',
            'isi' => 'required',
        ]);

        $news = new Draft;
        $news->judul = $request->judul;
        $news->kata_kunci = $request->kunci;
        $news->isi = $request->isi;
        $news->status = "draft";
        $news->created_by = $user->id;


        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('upload'), $thumbnailName);
            $news->thumbnail = $thumbnailName;
        }

        $news->save();

        return redirect()->route('draft')->with('success', 'Draft berita berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $draft = Draft::find($id);
        return view('review-draft', ['draft' => $draft]);
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
    public function update(Request $request)
    {
        // Validate the request...

        $draft = Draft::find($request->input('draft_id'));

        if (!$draft) {
            return redirect()->back()->with('error', 'Draft not found.');
        }

        // Update draft fields based on the form input
        $draft->judul = $request->input('judul');
        $draft->kata_kunci = $request->input('kunci');
        $draft->isi = $request->input('isi');

        // Handle file upload for the thumbnail
        if ($request->hasFile('thumbnail')) {
            // Validate the uploaded file
            $request->validate([
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Delete the existing thumbnail (if any)
            if ($draft->thumbnail) {
                Storage::delete('public/upload/' . $draft->thumbnail);
            }

            // Upload and update thumbnail
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('upload'), $thumbnailName);
            $draft->thumbnail = $thumbnailName;
        }

        // Determine the action based on the button pressed
        $action = $request->input('action');

        if ($action === 'save') {
            // Save draft without changing status
            $draft->save();
            return redirect()->route('draft')->with('success', 'Draft berhasil disimpan.');
        } elseif ($action === 'submit') {
            // Change status and save draft
            $draft->status = 'submitted';
            $draft->save();

            $review = new Review;
            $review->id_draft = $request->input('draft_id');
            $review->id_category = "1";
            $review->komisi = "100";
            $review->status = "menunggu";
            $review->catatan = "Masukkan Catatan";
            $review->save();

            return redirect()->route('draft')->with('success', 'Draft berhasil disubmit.');
        }

        // Default redirect
        return redirect()->route('draft')->with('error', 'Invalid action.');
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
