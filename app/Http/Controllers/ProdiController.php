<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    Public function index()
    {
        return view('prodi.index');
    }
    Public function insert()
    {
        return view('prodi.insert');
    }
    Public function edit()
    {
        return view('prodi.edit');
    }
}
