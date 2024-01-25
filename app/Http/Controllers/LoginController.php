<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function authenticate(Request $request)
    {
      $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required'
    ], [
        'email.required' => 'Email Wajib Diisi',
        'password.required' => 'Password Wajib Diisi'
    ]);

     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    //  elseif (Auth::guard('user')->attempt($credentials)) {
    // //     $request->session()->regenerate();
    // //     return redirect()->intended('/dashboard');
    // // }

    return back()->with('loginError', 'Apakah email dan password sudah benar!!!');
      
      
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
