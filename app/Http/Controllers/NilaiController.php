<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    Public function index()
    {
        return view('nilai.index');
    }
    Public function insert()
    {
        return view('nilai.insert');
    }
    Public function edit()
    {
        return view('nilai.edit');
    }
}
