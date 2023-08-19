<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_home(){
        return view('home');
    }
    public function index_dashboard(){
        return view('anggota.dashboard');
    }
    public function index_dashboard2(){
        return view('anggota.dashboard2');
    }
    public function index_dashboard3(){
        return view('anggota.dashboard3');
    }
    
}
