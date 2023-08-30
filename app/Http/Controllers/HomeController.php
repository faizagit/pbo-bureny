<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index_home(){
        $ekskul = Ekstrakurikuler::latest()->paginate(6);
        return view('home', compact('ekskul'));
    }
    public function index_dashboard(){
        $user = Auth::id();
        $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        $pengumuman = Pengumuman::where('ekstrakurikuler_id', $ekskul->ekskul1)->get();
        return view('anggota.dashboard', compact('ekskul', 'pengumuman'));
    }
    public function index_dashboard2(){
        $user = Auth::id();
        $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        $pengumuman = Pengumuman::where('ekstrakurikuler_id', $ekskul->ekskul2)->get();
        return view('anggota.dashboard2', compact('ekskul', 'pengumuman'));
    }
    public function index_dashboard3(){
        $user = Auth::id();
        $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        $pengumuman = Pengumuman::where('ekstrakurikuler_id', $ekskul->ekskul3)->get();
        return view('anggota.dashboard3', compact('ekskul', 'pengumuman'));
    }
    
}
