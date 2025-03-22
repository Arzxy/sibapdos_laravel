<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    Public function index()
    {
        return view('mahasiswa.index');
    }
    Public function insert()
    {
        return view('mahasiswa.insert');
    }
    Public function edit()
    {
        return view('mahasiswa.edit');
    }
}
