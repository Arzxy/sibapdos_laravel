<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    Public function index()
    {	
        $lastHari = Hari::orderBy('Id_Hari', 'desc')->first();
        $hari = Hari::All();

        if ($lastHari) {
            $lastId = $lastHari->Id_Hari;
            $number = (int) substr($lastId, 2);
            $lastHaris = 'HR' . str_pad($number + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $lastHaris = 'HR001';
        }
        return view('sekprodi.hari', ['lastHaris' => $lastHaris, 'hari' => $hari]);
    }
    Public function store(Request $request)
    {
        Hari::create([
            'Id_Hari' => $request->id,
            'Nm_Hari' => $request->nama_hari,
        ]);
        return redirect('/sekprodi/hari')->with('success', 'Data Hari Berhasil Ditambahkan');
    }
    Public function delete($id)
    {
        $hari = Hari::where('Id_Hari', $id)->first();
        if ($hari) {
            $hari->delete();
        }
        return redirect('/sekprodi/hari');
    }
}
