<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function create(Request $request){
        $validatedData = $request->validate([
            'nm_ekskul' => 'required|min:3|max:255',
            'deskripsi' => 'required|min:5',
            'hari' => 'required',
            'jam' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/gambar_ekskul', $image->hashName());
        // dd($image);

        $validatedData['gambar'] = $image->hashName();
        
        $ekskul = Ekstrakurikuler::create($validatedData);

        return redirect('/admin/input');
    }

    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::where('id', $id)->first();
        // dd($ekskul);

        return view('admin.editinput', ['ekskul' => $ekskul]);
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


    public function update(Request $request, Ekstrakurikuler $ekskul, $id)
    {
        // $this->validate($request, [
        //     'nm_ekskul' => 'required|max:255',
        //     'deskripsi' => 'required',
        //     'hari' => 'required',
        //     'jam' => 'required',
        //     'gambar' => 'nullable|image|mimes:png,jpg,jpeg',
        // ]);

        $validatedData = $request->validate([
            'nm_ekskul' => 'required|max:255',
            'deskripsi' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);
        // dd($validatedData);
    
        $ekskul = Ekstrakurikuler::findOrFail($id);

    
        if($request->file('gambar') == "") {
    
            $ekskul->update([
                'nm_ekskul'     => $validatedData['nm_ekskul'],
                'deskripsi'   => $validatedData['deskripsi'],
                'hari'   => $validatedData['hari'],
                'jam'   => $validatedData['jam']
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/blogs/'.$ekskul->image);
    
            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/gambar_ekskul', $image->hashName());
    
            $ekskul->update([
                'gambar'     => $image->hashName(),
                'nm_ekskul'     => $validatedData['nm_ekskul'],
                'deskripsi'   => $validatedData['deskripsi'],
                'hari'   => $validatedData['hari'],
                'jam'   => $validatedData['jam']
            ]);
    
        }
    
        if($ekskul){
            //redirect dengan pesan sukses
            return redirect()->route('index_input')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('index_input')->with(['error' => 'Data Gagal Diupdate!']);
        }
    
        
    }
}
