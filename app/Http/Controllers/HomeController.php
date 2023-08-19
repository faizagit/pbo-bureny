<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_home(){
        $ekskul = Ekstrakurikuler::latest()->paginate(6);
        return view('home', compact('ekskul'));
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
