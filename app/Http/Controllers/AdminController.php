<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index_admin(){
        return view('admin.admin');
    }
    public function index_absen(){
        return view('admin.absen');
    }
    public function index_ekskul(){
        return view('admin.ekskul');
    }
    public function index_input(){
        $ekskul = Ekstrakurikuler::latest()->paginate(5);
        return view('admin.input', compact('ekskul'));
    }
    public function index_siswa(){
        return view('admin.siswa');
    }
    public function index_tambahinput(){
        return view('admin.tambahinput');
    }

    public function pengumuman(){
        $user = Auth::id();
        $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        return view('admin.pengumuman', compact('ekskul'));
    }
    public function index_pengumuman($id){
        $ekskul_id = $id;
        $ekskul = Pengumuman::where('ekstrakurikuler_id', $ekskul_id)->latest()->paginate(5);
        return view('admin.inputpengumuman', compact('ekskul', 'ekskul_id'));
    }
    public function input_pengumuman($id){
        $ekskul_id = $id;
        return view('admin.formpengumuman', compact('ekskul_id'));
    }
}
