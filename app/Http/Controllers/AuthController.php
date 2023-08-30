<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index_login(){
        return view('auth.login');
    }
    public function index_register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|max:255',
            'username' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/anggota/1');
            }
        }
        return back()->with('loginError', 'Login Failed!');

    }

}
