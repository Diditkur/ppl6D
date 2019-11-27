<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tanaman;
class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // mengambil data dari table
      	$Tanaman = DB::select("select * from tanam");

      	// mengirim data  ke view index
      	return view('coba',['Tanaman' => $Tanaman]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {


      return view('tambah1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // insert data ke table pegawai

        DB::table('tanam')->insert([
          'kode' => $request->kode,
          'nama' => $request->nama,
          'curah' => $request->curah,
          'kelembapan' => $request->kelembapan,
          'suhu' => $request->suhu,
          'Gambar' => base64_encode($request->file('Gambar')),
          'Harga' => $request->Harga,
          'jangka' => $request->jangka,
          'inflasi1' => $request->inflasi1,
          'inflasi2' => $request->inflasi2,
          'inflasi3' => $request->inflasi3,
          'pilihan' => $request->pilihan,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('admin/tanaman');
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
    public function edit($id_tanam)
    {
      // mengambil data pegawai berdasarkan id yang dipilih
      $tanaman = DB::table('tanam')
                ->where('id_tanam','=',$id_tanam)
                ->get();
      // passing data pegawai yang didapat ke view edit.blade.php
      return view('edit1',['tanaman'=> $tanaman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_tanam)
    {
      // update data pegawai

      DB::table('tanam')
      ->where('id_tanam','=',$id_tanam)
      ->update([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'curah' => $request->curah,
        'kelembapan' => $request->kelembapan,
        'suhu' => $request->suhu,
        'Gambar' => base64_encode($request->file('Gambar')),
        'Harga' => $request->Harga,
        'jangka' => $request->jangka,
        'inflasi1' => $request->inflasi1,
        'inflasi2' => $request->inflasi2,
        'inflasi3' => $request->inflasi3,
        'pilihan' => $request->pilihan,
      ]);

      // alihkan halaman ke halaman pegawai
      return redirect('admin/tanaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id_tanam)
    {
            // menghapus data pegawai berdasarkan id yang dipilih
      DB::table('tanam')
      ->where('id_tanam','=',$id_tanam)
      ->delete();

      // alihkan halaman ke halaman pegawai
      return redirect('admin/tanaman');
    }
}
