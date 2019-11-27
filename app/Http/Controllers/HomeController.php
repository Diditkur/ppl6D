<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tanaman;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function proses()
    {
      $Tanaman = DB::table('tanam')
                      ->where('curah', '=',     'T')
                      ->orWhere('kelembapan','=', 'T')
                      ->orWhere('suhu','=',     'C')
                      ->orderby('Harga','desc')
                      ->get();

      return view('beranda', ['Tanaman' => $Tanaman]);


    }
}
