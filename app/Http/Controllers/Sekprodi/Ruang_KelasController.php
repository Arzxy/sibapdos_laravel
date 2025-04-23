<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use App\Models\Ruang_Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ruang_KelasController extends Controller
{
    Public function index()
    {	
        $lastRuang = Ruang_Kelas::orderBy('Kd_Ruangan', 'desc')->first();
        $ruang = Ruang_Kelas::All();

        if ($lastRuang) {
            $lastId = $lastRuang->Kd_Ruangan;
            $number = (int) substr($lastId, 2);
            $lastRuangs = 'R' . str_pad($number + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $lastRuangs = 'R0001';
        }
        return view('sekprodi.ruang_kelas', ['lastRuangs' => $lastRuangs, 'ruang' => $ruang]);
    }
    Public function store(Request $request)
    {
        Ruang_Kelas::create([
            'Kd_Ruangan' => $request->Kd_Ruangan,
            'Nm_Ruangan' => $request->Nm_Ruangan,
            'Jml_Kapasitas' => $request->Jml_Kapasitas,
        ]);
        return redirect('/sekprodi/ruang_kelas')->with('success', 'Data Hari Berhasil Ditambahkan');
    }
    Public function delete($id)
    {
        
        $ruang = Ruang_Kelas::where('Kd_Ruangan', $id)->first();
        if ($ruang) {
            DB::table('tbl_ruangankelas')->where('Kd_Ruangan', $id)->delete();
        }
        return redirect('/sekprodi/ruang_kelas');
    }
}
