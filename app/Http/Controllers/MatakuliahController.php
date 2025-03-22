<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    Public function index()
    {
        return view('matakuliah.index');
    }
    Public function insert()
    {
        return view('matakuliah.insert');
    }
    Public function edit()
    {
        return view('matakuliah.edit');
    }
}
