<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\users;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Petani = users::all();

      return view('user',['Petani' => $Petani]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
          return view('tambah3');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      DB::table('users')
      ->insert([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
      ]);
      // alihkan halaman ke halaman pegawai
      return redirect('admin/petani');
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
      $Petani = DB::table('users')
                ->where('id','=',$id)
                ->get();

      return view('edit3',['Petani'=> $Petani]);
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
      DB::table('users')
      ->where('id','=',$id)
      ->update([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
      ]);

      // alihkan halaman ke halaman pegawai
      return redirect('admin/petani');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      DB::table('users')
      ->where('id','=',$id)
      ->delete();

      // alihkan halaman ke halaman pegawai
      return redirect('admin/petani');
    }
}
