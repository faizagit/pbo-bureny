<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index_login(){
        return view('login');
    }
    public function index_register(){
        return view('register');
    }

}
