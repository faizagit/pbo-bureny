<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index_admin(){
        return view('admin.admin');
    }
    public function index_absen(){
        return view('admin.absen');
    }
    public function index_input(){
        return view('admin.input');
    }
    public function index_siswa(){
        return view('admin.siswa');
    }
    public function index_tambahinput(){
        return view('admin.tambahinput');
    }
}
