<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function create(Request $request){
        
        // dd($request);
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'pengumuman' => 'required|min:3',
            'ekstrakurikuler_id' => 'required',
        ]);

        Pengumuman::create($validatedData);

        return redirect()->route('index_pengumuman', $request->ekstrakurikuler_id);
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::where('id', $id)->first();
        // dd($ekskul);

        return view('admin.editpengumuman', ['pengumuman' => $pengumuman]);
    }

    public function update(Request $request, $id)
    {
       
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'pengumuman' => 'required',
        ]);
        // dd($validatedData);
    
        $pengumuman = Pengumuman::findOrFail($id);
    
        $pengumuman->update($validatedData);
    
    
        if($pengumuman){
            //redirect dengan pesan sukses
            return redirect()->route('index_pengumuman', $pengumuman->ekstrakurikuler_id)->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('index_pengumuman', $pengumuman->ekstrakurikuler_id)->with(['error' => 'Data Gagal Diupdate!']);
        }
    
        
    }


    public function delete($id, Request $request){
        // dd($ekskul_id);
        $pengumuman = Pengumuman::findOrFail($id)->delete();

        return redirect()->route('index_pengumuman', $request->ekstrakurikuler_id);
    }
}
