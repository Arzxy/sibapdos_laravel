<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekprodiController extends Controller
{
    Public function index()
    {
        return view('sekprodi.index');
    }
    Public function hari()
    {
        return view('sekprodi.hari');
    }
    Public function ruang_kelas()
    {
        return view('sekprodi.ruang_kelas');
    }
    Public function krs()
    {
        return view('sekprodi.krs');
    }
    Public function mahasiswa()
    {
        return view('sekprodi.mahasiswa');
    }
    Public function dosen()
    {
        return view('sekprodi.dosen');
    }
    Public function matakuliah()
    {
        return view('sekprodi.matakuliah');
    }
    Public function prodi()
    {
        return view('sekprodi.prodi');
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
