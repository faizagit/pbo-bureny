<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Ekstrakurikuler;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function absensi($id){
        $user = Auth::id();

        $ekskul = Ekstrakurikuler::where('id', $id)->first();

        // $ekskul = User::where('id', $user)->with('ekskulpertama', 'ekskulkedua', 'ekskulketiga')->first();
        $today = Carbon::now()->isoFormat('dddd');
        // $today = 'Sabtu';
        $cekAbsen = Absensi::where(['user_id' => $user, 'tanggal' => date('Y-m-d'), 'keterangan' => 'Hadir', 'ekstrakurikuler_id' => $ekskul->id])->first();

        if (!isset($cekAbsen)) {
            if ($today == $ekskul->hari) {
                Absensi::create([
                    'tanggal' => date('Y-m-d'),
                    'jam_absen' => date('H:i:s'),
                    'user_id' => $user,
                    'keterangan' => 'Hadir',
                    'ekstrakurikuler_id' => $ekskul->id,
                ]);
                toastr()->success('Absen berhasil', 'Sukses!');
                return back();
            }else {            
                toastr()->error('Absensi hanya bisa dilakukan pada hari ekskul', 'Gagal!');
                return back();
            }
        }else {
            toastr()->error('Anda sudah absen', 'Gagal!');
            return back();
        }
    }
}
