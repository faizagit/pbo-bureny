<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_home(){
        $ekskul = Ekstrakurikuler::latest()->paginate(6);
        return view('home', compact('ekskul'));
    }
    public function index_dashboard(){
        $ekskul1 = User::with('ekskul1')->get();
        return view('anggota.dashboard', compact('ekskul1'));
    }
    public function index_dashboard2(){
        return view('anggota.dashboard2');
    }
    public function index_dashboard3(){
        return view('anggota.dashboard3');
    }
    
}
