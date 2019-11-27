<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\bos;

class BosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Bos = bos::all();

      return view('pemilik',['Bos' => $Bos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('tambah4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      DB::table('bos')
      ->insert([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
      ]);
      // alihkan halaman ke halaman pegawai
      return redirect('admin/pemilik');
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
      $Pemilik = DB::table('bos')
                ->where('id','=',$id)
                ->get();

      return view('edit4',['Pemilik'=> $Pemilik]);
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
      DB::table('bos')
      ->where('id','=',$id)
      ->update([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
      ]);

      // alihkan halaman ke halaman pegawai
      return redirect('admin/pemilik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      DB::table('bos')
      ->where('id','=',$id)
      ->delete();

      // alihkan halaman ke halaman pegawai
      return redirect('admin/pemilik');
    }
}
