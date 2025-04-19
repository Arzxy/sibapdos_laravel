<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ruang_KelasController extends Controller
{
    Public function index()
    {
        return view('sekprodi.ruang_kelas');
    }
}
