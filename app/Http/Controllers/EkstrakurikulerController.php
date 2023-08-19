<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function create(Request $request){
        $validatedData = $request->validate([
            'nm_ekskul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/gambar_ekskul', $image->hashName());
        // dd($image);

        $validatedData['gambar'] = $image->hashName();
        
        Ekstrakurikuler::create($validatedData);

        return redirect('/admin/input');
    }

    public function update(Ekstrakurikuler $ekskul){
        Ekstrakurikuler::destroy($ekskul->id);
    }
    public function destroy(Ekstrakurikuler $ekskul){
        Ekstrakurikuler::destroy($ekskul->id);
    }
}
