<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    Public function index()
    {
        return view('dashboard');
    }
}
