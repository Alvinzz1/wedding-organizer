<?php
namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]); 
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:admins',
            'password' => 'required|min:5|max:255'
        ]);
          $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ]);  
          $user->save();


        // $validateData['password'] = Hash::make($validateData['password']);
        // User::create($validateData);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }
}
