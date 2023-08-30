<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Ekstrakurikuler;
use App\Models\Izin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IzinController extends Controller
{
    public function izin(Request $request, $id){
        $user = Auth::id();

        $ekskul = Ekstrakurikuler::where('id', $id)->first();

        // $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        $validatedData = $request->validate([
            'alasan' => 'required',
        ]);
        // $today = Carbon::now()->isoFormat('dddd');
        $today = 'Sabtu';
        // dd($today);
        $hadir = Absensi::where(['user_id' => $user, 'tanggal' => date('Y-m-d'), 'keterangan' => 'Hadir', 'ekstrakurikuler_id' => $ekskul->id])->first();
        $izin = Absensi::where(['user_id' => $user, 'tanggal' => date('Y-m-d'), 'keterangan' => 'Sakit', 'ekstrakurikuler_id' => $ekskul->id])->first();

        if (isset($izin)) {
            toastr()->error('Anda sudah izin', 'Gagal!');
            return back();
        }

        if (isset($hadir)) {
            toastr()->error('Anda sudah absen', 'Gagal!');
            return back();
        }
        
        if (!isset($izin)) {
            if ($today == $ekskul->hari) {
                Absensi::create([
                    'tanggal' => date('Y-m-d'),
                    'jam_absen' => date('H:i:s'),
                    'user_id' => $user,
                    'keterangan' => "Sakit",
                    'ekstrakurikuler_id' => $ekskul->id,
                ]);
                Izin::create([
                    'tanggal' => date('Y-m-d'),
                    'user_id' => $user,
                    'alasan' => $validatedData['alasan'],
                    'ekstrakurikuler_id' => $ekskul->id,
                ]);
                toastr()->success('Berhasil izin', 'Sukses!');
                return back();
            }else {
                toastr()->error('Izin hanya bisa dilakukan pada hari ekskul', 'Gagal!');
                return back();
                // return back()->with('izinError', 'Izin hanya bisa dilakukan pada hari ekskul');
            }
        }
    }
}
