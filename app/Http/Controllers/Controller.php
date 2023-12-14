<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function pencarian()
    {
        return view('pencarian');
    }
    public function detail()
    {
        return view('detail');
    }
    public function profil()
    {
        return view('profil');
    }
}
