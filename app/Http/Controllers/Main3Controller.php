<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tanaman;
use App\ratarata_cuaca;
class Main3Controller extends Controller
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
               ->where('id','=',3)
               ->first();

     $curah=$curah->curah_hujan;

     $kelembapan  = DB::table('ratarata_cuaca')
              ->select('kelembapan')
              ->where('id','=',3)
              ->first();

    $kelembapan=$kelembapan->kelembapan;

    $suhu  = DB::table('ratarata_cuaca')
             ->select('suhu')
             ->where('id','=',3)
             ->first();

   $suhu=$suhu->suhu;

     $Tanaman = DB::table('tanam')
                     ->where('curah', '=', $curah)
                     ->orWhere('kelembapan','=', $kelembapan)
                     ->orWhere('suhu','=', $suhu)
                     ->orderby('Harga','desc')
                     ->get();

    return view('kuartal3', ['Tanaman' => $Tanaman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
