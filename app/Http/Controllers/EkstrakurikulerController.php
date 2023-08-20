<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function delete(Ekstrakurikuler $ekskul, $id){
        $ekskul = Ekstrakurikuler::findOrFail($id);
        // dd($ekskul);
        Storage::disk('local')->delete('public/gambar_ekskul/'.$ekskul->image);
        $ekskul->delete();

        if($ekskul){
            //redirect dengan pesan sukses
            return redirect()->route('index_input')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('index_input')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit(Ekstrakurikuler $ekskul)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Ekstrakurikuler $ekskul){
        Ekstrakurikuler::destroy($ekskul->id);
    }
}
