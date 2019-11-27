<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Support\Facades\Auth;
use App\admins;
use App\bos;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $sender)
    {
      $data1= users::where('email',$sender->email)->where('password',$sender->password)
      ->get();
      $data2= admins::where('email',$sender->email)->where('password',$sender->password)
      ->get();
      $data3= bos::where('email',$sender->email)->where('password',$sender->password)
      ->get();
if(count($data1)>0){
  //login succes user
  Auth::guard('users')->LoginUsingId($data1[0]['id']);
  return redirect('/user');

}elseif (count($data2)>0) {
  //login succes admin
  Auth::guard('admins')->LoginUsingId($data2[0]['id']);
  return redirect('/admin');

}elseif (count($data3)>0) {
  //login succes bos
  Auth::guard('bos')->LoginUsingId($data3[0]['id']);
  return redirect('/bos');
}else {
  //fail
  return redirect('/error');
}
    }

    function logout()
    {
      if (Auth::guard('users')->check()) {
          Auth::guard('users')->logout();
      }elseif (Auth::guard('admins')->check()) {
          Auth::guard('admins')->logout();
    }elseif (Auth::guard('bos')->check()) {
        Auth::guard('bos')->logout();
    }
      return redirect('/');
    }
}
