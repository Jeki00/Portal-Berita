<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models;
use App\Models\Iklan;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $iklan = Iklan::all();
        return view('iklan', compact('iklan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $iklan=Iklan::where('tanggal_keluar','>',now())
        ->orderBy('letak','asc')
        ->orderBy('tanggal_keluar','asc')->get();

        return view('tambah-iklan',compact('iklan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // if ($request->hasFile('gambar')) {
        //     // put image in the public storage
        //     $filePath = Storage::disk('public')->put('images/iklan/gambar_iklan', request()->file('gambar'));
        // }

        // dd($request);
        $user = Auth::user();

        $validated = $request->validate([
            'judul' => 'required',
            'perusahaan' => 'required',
            'letak' => 'required',
            'tanggal_keluar' => 'required',
            'tanggal_hilang' => 'required',
        ]);

        $ads = Iklan::where('letak','=',$request['letak'])->get();

        
        // $firstAd = Iklan::where('letak', '=', $request['letak'])
        // ->where('tanggal_hilang','<', Carbon::parse($request['tanggal_keluar']))
        // ->orderByDesc('tanggal_hilang')
        // ->first();
        
        // $secondAd = Iklan::where('letak', '=', $request['letak'])
        // ->where('tanggal_keluar','>', Carbon::parse($request['tanggal_hilang']))
        // ->orderByDesc('tanggal_keluar')
        // ->first();
        
        // $latestDate = Iklan::where('letak', '=', $request['letak'])
        // ->latest('tanggal_hilang')
        // ->first();
        
        // dd($secondAd->tanggal_keluar);
        
        function createDateRange($startDate, $endDate){
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);
            // $end = $end->modify('+1 day'); // Menambahkan satu hari untuk memasukkan tanggal akhir

            $interval = new DateInterval('P1D'); // Interval setiap satu hari
            $dateRange = new DatePeriod($start, $interval, $end);
            
            $dates = [];
            foreach ($dateRange as $date) {
                $dates[] = $date->format("Y-m-d");
            }
            
            return $dates;
        }

        $req_tgl_keluar = Carbon::parse($request['tanggal_keluar']);
        $req_tgl_hilang = Carbon::parse($request['tanggal_hilang'])->addDay()->subSecond();

        // error ketika tanggal keluar dan tanggal hilang tidak sesuai
        if($req_tgl_keluar>$req_tgl_hilang){
            return redirect()->back()->with([
                'error'=>'Tanggal berakhir harus tanggal besok atau seterusnya dari tanggal mulai. Mohon cek kembali' ,
                'judul'=>$request['judul'],
                'perusahaan'=>$request->perusahaan,
                'letak'=>$request['letak'],
                'tanggal_keluar'=>$request['tanggal_keluar'],
                'tanggal_hilang'=>$request['tanggal_hilang']
            ]);
        }
        foreach ($ads as $key => $ad) {
            if(count(array_intersect(createDateRange($ad->tanggal_keluar,$ad->tanggal_hilang) , createDateRange($req_tgl_keluar, $req_tgl_hilang) )) !=0){
                // dd(createDateRange($ad->tanggal_keluar,$ad->tanggal_hilang));
                return redirect()->back()->with([
                    'error'=>'space Iklan telah diisi oleh iklan '. $ad['judul'] .' dari '. $ad['perusahaan'] ,
                    'judul'=>$request['judul'],
                    'perusahaan'=>$request->perusahaan,
                    'letak'=>$request['letak'],
                    'tanggal_keluar'=>$request['tanggal_keluar'],
                    'tanggal_hilang'=>$request['tanggal_hilang'],
                ]);
            }
        }

        $gambarIklan = 'iklan-' . $request->perusahaan . '-' . time() . '.' . $request['gambar_iklan']->extension();
        $buktiTranser = 'bukti_transfer-' . $request->perusahaan . '-' . time() . '.' . $request['bukti_transfer']->extension();

        $request['gambar_iklan']->storeAs('public/images/iklan', $gambarIklan);
        $request['bukti_transfer']->storeAs('public/images/bukti_transfer', $buktiTranser);
        // dd($user->id);

        
        Iklan::create([
            'judul'=>$request->judul,
            'gambar'=>$gambarIklan,
            'tanggal_keluar'=>$req_tgl_keluar,
            'tanggal_hilang'=>$req_tgl_hilang,
            'letak'=>$request['letak'],
            'bukti_transfer'=>$buktiTranser,
            'perusahaan'=>$request->perusahaan,
            'created_by'=>$user->id,
        ]);

        return redirect('/iklan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $iklan = Iklan ::find($id);

        dd($iklan);

        return view('',compact(iklan));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $iklan = Iklan::find($id);
        $daftar=Iklan::where('tanggal_keluar','>',now())
        ->orderBy('letak','asc')
        ->orderBy('tanggal_keluar','asc')->get();

        // dd($iklan);
        return view('edit-iklan',["iklan"=>$iklan,'daftar'=>$daftar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $user = Auth::user();

        // dd($request['gambar_iklan']);

        // $validated = $request->validate([
        //     'judul' => 'required',
        //     'perusahaan' => 'required',
        //     'letak' => 'required',
        //     'tanggal_keluar' => 'required',
        //     'tanggal_hilang' => 'required',
        // ]);

        $ads = Iklan::where('letak','=',$request['letak'])->get();

        // dd(count($ads));

        function createDateRange($startDate, $endDate){
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);
            // $end = $end->modify('+1 day'); // Menambahkan satu hari untuk memasukkan tanggal akhir

            $interval = new DateInterval('P1D'); // Interval setiap satu hari
            $dateRange = new DatePeriod($start, $interval, $end);
            
            $dates = [];
            foreach ($dateRange as $date) {
                $dates[] = $date->format("Y-m-d");
            }
            
            return $dates;
        }

        $req_tgl_keluar = Carbon::parse($request['tanggal_keluar']);
        $req_tgl_hilang = Carbon::parse($request['tanggal_hilang'])->addDay()->subSecond();

        if($req_tgl_keluar>$req_tgl_hilang){
            return redirect()->route('editIklan', ['id'=>$id])->with([
                'error'=>'Tanggal berakhir harus tanggal besok atau seterusnya dari tanggal mulai. Mohon cek kembali' ,
            ]);
        }

        //jika tidak ada letak iklan yang sama
        if(count($ads)==0){
            if($request['gambar_iklan']==null){
                $iklan = Iklan ::find($id);
                $gambarIklan = $iklan['gambar'];
            }else{
                $gambarIklan = 'iklan-' . $request->perusahaan . '-' . time() . '.' . $request['gambar_iklan']->extension();
                $request['gambar_iklan']->storeAs('public/images/iklan', $gambarIklan);
            }
    
            //gambar bukti iklan
            if($request['bukti_transfer']==null){
                $iklan = Iklan ::find($id);
                $buktiTranser = $iklan['bukti_transfer'];
            }else{
                $buktiTranser = 'bukti_transfer-' . $request->perusahaan . '-' . time() . '.' . $request['bukti_transfer']->extension();
                $request['bukti_transfer']->storeAs('public/images/bukti_transfer', $buktiTranser);
            }
    
    
            $draft = Iklan::find($id)->update([
                'judul'=>$request->judul,
                'gambar'=>$gambarIklan,
                'tanggal_keluar'=>$req_tgl_keluar,
                'tanggal_hilang'=>$req_tgl_hilang,
                'letak'=>$request->letak,
                'bukti_transfer'=>$buktiTranser,
                'perusahaan'=>$request->perusahaan,
                'created_by'=>$user->id,
            ]);
    
            return redirect()->route('iklan');
        }
        foreach ($ads as $key => $ad) {
            if(count(array_intersect(createDateRange($ad->tanggal_keluar,$ad->tanggal_hilang) , createDateRange($req_tgl_keluar, $req_tgl_hilang) )) !=0){
                // dd(createDateRange($ad->tanggal_keluar,$ad->tanggal_hilang));
                if($ad->id == $id){
                    if($request['gambar_iklan']==null){
                        $iklan = Iklan ::find($id);
                        $gambarIklan = $iklan['gambar'];
                    }else{
                        $gambarIklan = 'iklan-' . $request->perusahaan . '-' . time() . '.' . $request['gambar_iklan']->extension();
                        $request['gambar_iklan']->storeAs('public/images/iklan', $gambarIklan);
                    }
            
                    //gambar bukti iklan
                    if($request['bukti_transfer']==null){
                        $iklan = Iklan ::find($id);
                        $buktiTranser = $iklan['bukti_transfer'];
                    }else{
                        $buktiTranser = 'bukti_transfer-' . $request->perusahaan . '-' . time() . '.' . $request['bukti_transfer']->extension();
                        $request['bukti_transfer']->storeAs('public/images/bukti_transfer', $buktiTranser);
                    }
            
            
                    $draft = Iklan::find($id)->update([
                        'judul'=>$request->judul,
                        'gambar'=>$gambarIklan,
                        'tanggal_keluar'=>$req_tgl_keluar,
                        'tanggal_hilang'=>$req_tgl_hilang,
                        'letak'=>$request['letak'],
                        'bukti_transfer'=>$buktiTranser,
                        'perusahaan'=>$request->perusahaan,
                        'created_by'=>$user->id,
                    ]);
                    
                    // dd($draft);
                    return redirect('/iklan');

                }else{
                    return redirect()->back()->with([
                        'error'=>'space Iklan telah diisi oleh iklan '. $ad['judul'] .' dari '. $ad['perusahaan'] ,
                        'judul'=>$request['judul'],
                        'perusahaan'=>$request->perusahaan,
                        'letak'=>$request['letak'],
                        'tanggal_keluar'=>$request['tanggal_keluar'],
                        'tanggal_hilang'=>$request['tanggal_hilang'],
                    ]);
                }
            }
        }



        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Iklan::destroy($id);
        
        return redirect('/iklan');
    }
}
