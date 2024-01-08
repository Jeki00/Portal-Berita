<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draft;
use App\Models\Berita;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Menampilkan review yang berasal dari draft yang dibuat oleh pengguna yang login
        $drafts = Draft::where('created_by', $user->id)->get();

        // Mengambil ID draft dari koleksi draft
        $draftIds = $drafts->pluck('id');

        // Menampilkan review berdasarkan ID draft yang dimiliki oleh pengguna yang login
        $reviews = Review::whereIn('id_draft', $draftIds)->get();

        return view('postinganku', ['reviews' => $reviews]);
    }
    public function indexAdmin()
    {
        $reviews = Review::with('draft.user:id,name')->get();

        return view('daftar-berita', ['reviews' => $reviews]);
    }

    public function reviewAdmin($id)
    {
        $reviews = Review::find($id);
        return view('review-berita', ['reviews' => $reviews]);
    }

    public function update(Request $request)
    {

        $review = Review::find($request->input('review_id'));

        $review->id_category = $request->input('kategori');
        $review->komisi = $request->input('komisi');
        $review->catatan = $request->input('catatan');

        // Determine the action based on the button pressed
        $action = $request->input('action');

        if ($action === 'tolak') {
            $review->status = 'ditolak';
            $review->save();
            return redirect()->route('daftarBerita');
        } elseif ($action === 'submit') {
            $review->status = 'diterima';
            $review->save();

            $berita = new Berita;
            $berita->id_review = $request->input('review_id');
            $berita->view = "0";
            $berita->save();
            return redirect()->route('daftarBerita');
        }

        return redirect()->route('daftarBerita')->with('error', 'Invalid action.');
    }
}
