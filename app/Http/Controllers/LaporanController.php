<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller {
    public function form(){

        return view('form');
    }

    public function proses(Request $request){

        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('konfirmasi', [
            'nama' => $nama,
            'lokasi' => $lokasi,
            'tinggi' => $tinggi
        ]);
    }
}

