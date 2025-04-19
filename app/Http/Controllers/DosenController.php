<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    Public function index()
    {
        return view('dosen.index');
    }
    public function absensi(){
        return view ('dosen.absensi');
    }
    
    public function tugas(){
        return view ('dosen.tugas');
    }
    
    public function nilai(){
        return view ('dosen.nilai');
    }
    
    public function krs(){
        return view ('dosen.krs');
    }
    public function bap_dosen(){
        return view ('dosen.bap_dosen');
    }
    public function presensi_nilai(){
        return view ('dosen.presensi_nilai');
    }
    public function dosen_pengampu(){
        return view ('dosen.dosen_pengampu');
    }
    public function bap_absensi(){
        return view ('dosen.bap_absensi');
    }
    public function laporan_bap_absensi(){
        return view ('dosen.laporan_bap_absensi');
    }
    public function laporan_bap_dosen(){
        return view ('dosen.laporan_bap_dosen');
    }
    public function laporan_presensi_nilai(){
        return view ('dosen.laporan_presensi_nilai');
    }
    public function laporan_dosen_pengampu(){
        return view ('dosen.laporan_dosen_pengampu');
    }
}