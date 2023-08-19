<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

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
}
