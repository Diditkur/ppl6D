<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ratarata_cuaca;

class CuacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cuaca = DB::select("select * from ratarata_cuaca");


        return view('cuaca',['Cuaca' => $Cuaca]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('tambah2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      DB::table('ratarata_cuaca')
      ->insert([
        'ID_KUARTAL' => $request->ID_KUARTAL,
        'kuartal' => $request->kuartal,
        'curah_hujan' => $request->curah_hujan,
        'kelembapan' => $request->kelembapan,
        'suhu' => $request->suhu,
      ]);
      // alihkan halaman ke halaman pegawai
      return redirect('admin/cuaca');
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
      $Cuaca = DB::table('ratarata_cuaca')
                ->where('id','=',$id)
                ->get();

      return view('edit2',['Cuaca'=> $Cuaca]);
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
      DB::table('ratarata_cuaca')
      ->where('id','=',$id)
      ->update([
        'ID_KUARTAL' => $request->ID_KUARTAL,
        'kuartal' => $request->kuartal,
        'curah_hujan' => $request->curah_hujan,
        'kelembapan' => $request->kelembapan,
        'suhu' => $request->suhu,
      ]);

      // alihkan halaman ke halaman pegawai
      return redirect('admin/cuaca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      DB::table('ratarata_cuaca')
      ->where('id','=',$id)
      ->delete();

      // alihkan halaman ke halaman pegawai
      return redirect('admin/cuaca');
    }
}
