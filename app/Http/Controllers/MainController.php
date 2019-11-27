<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tanaman;
use App\ratarata_cuaca;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $curah  = DB::table('ratarata_cuaca')
              ->select('curah_hujan')
              ->where('id','=',1)
              ->first();

    $curah=$curah->curah_hujan;

    $kelembapan  = DB::table('ratarata_cuaca')
             ->select('kelembapan')
             ->where('id','=',1)
             ->first();

   $kelembapan=$kelembapan->kelembapan;

   $suhu  = DB::table('ratarata_cuaca')
            ->select('suhu')
            ->where('id','=',1)
            ->first();

  $suhu=$suhu->suhu;

    $Tanaman = DB::table('tanam')
                    ->where('curah', '=', $curah)
                    ->orWhere('kelembapan','=', $kelembapan)
                    ->orWhere('suhu','=', $suhu)
                    ->orderby('Harga','desc')
                    ->get();
  return view('kuartal1', ['Tanaman' => $Tanaman]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proses($id_tanam)
    {
        $Pilihan  = DB::table('tanam')
                  ->select('pilihan')
                  ->where('id_tanam','=',$id_tanam)
                  ->first();
        $count=$Pilihan->pilihan;
        $count-=1;

        $update = DB::table('tanam')
                ->where('id_tanam','=',$id_tanam)
                ->update(['pilihan' => $count]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
