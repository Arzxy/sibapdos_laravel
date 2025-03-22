<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    Public function index()
    {
        return view('mahasiswa.master');
    }
}
