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
}