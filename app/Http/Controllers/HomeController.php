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
}
