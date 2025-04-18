<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dosen_PengampuController extends Controller
{
    Public function index()
    {
        return view('sekprodi.dosen_pengampu');
    }
}
