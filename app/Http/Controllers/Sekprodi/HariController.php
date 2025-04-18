<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HariController extends Controller
{
    Public function index()
    {
        return view('sekprodi.hari');
    }
}
