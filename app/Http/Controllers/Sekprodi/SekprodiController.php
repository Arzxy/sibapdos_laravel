<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SekprodiController extends Controller
{
    Public function index()
    {
        return view('sekprodi.index');
    }
    Public function krs()
    {
        return view('sekprodi.krs');
    }
    Public function dosen_pengampu()
    {
        return view('sekprodi.dosen_pengampu');
    }
    Public function laporan_mahasiswa()
    {
        return view('sekprodi.laporan_mahasiswa');
    }
    Public function laporan_dosen()
    {
        return view('sekprodi.laporan_dosen');
    }
    Public function laporan_matakuliah()
    {
        return view('sekprodi.laporan_matakuliah');
    }
    Public function laporan_dosen_pengampu()
    {
        return view('sekprodi.laporan_dosen_pengampu');
    }
}
