<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required'=> 'Password Wajib Diisi',
        
      ]);

      $infologin = [
        'email' => $request->email,
        'password' => $request->password
      ];

      if (Auth::attempt($infologin)) {
        //messages sukses
        return 'sukses';
      } else {
        //messages gagal\
        return 'gagal';
      }

    }
}
