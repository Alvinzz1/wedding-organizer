<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
<<<<<<< HEAD
        ],
         [
=======
        ], 
        [
>>>>>>> c84618d7de38b80b4c86081e0962ef048d2ee7f4
            'email.required' => 'Email Wajib Diisi',
            'email.required' => 'Format Email Tidak Valid',
            'password.required' => 'Password Wajib Diisi'
            
        ]);
<<<<<<< HEAD
        
=======

>>>>>>> c84618d7de38b80b4c86081e0962ef048d2ee7f4
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        
    }

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
