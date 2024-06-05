<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
   public function index(){
    return view ('auth/login');
   }

   public function login(LoginRequest $r)
   {
      if($r->validated()){
         if(Auth::guard('web')->attempt(
            [
               'username' => $r->username,
               'password' =>$r->password
            ]
         ))
         {
            return redirect('dashboard')->with('pesan','Berhasil Login');
         }
         else
         {
            return back()->with('pesan','Login Gagal');
         }
      }
   }

   public function register(){
      return view ('auth/register');
   }

   public function prosesregis(RegisterRequest $r){
      if($r->validated()){
          User::create([
              'username'=> $r->username,
              'email'=> $r->email,
              'password'=> Hash::make($r->password)
          ]);

          return redirect ('/')->with('pesan','Registrasi Berhasil');
      
  }
}



   
}

