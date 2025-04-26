<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    Public function index()
    {	
        $matakuliah = Matakuliah::All();

        return view('sekprodi.matakuliah', ['matakuliah' => $matakuliah]);
    }
    Public function store(Request $request)
    {
        Matakuliah::create([
            'Kd_Matkuliah' => $request->Kd_Matkuliah,
            'Nm_Matakuliah' => $request->Nm_Matakuliah,
            'Sks_Matakuliah' => $request->Sks_Matakuliah,
            'Teori_Matkuliah' => $request->Teori_Matkuliah,
            'Praktek_Matkuliah' => $request->Praktek_Matkuliah,
            'Smester_Matakuliah' => $request->Smester_Matakuliah,
        ]);
        return redirect('/sekprodi/matakuliah')->with('success', 'Data Matakuliah Berhasil Ditambahkan');
    }
    Public function delete($id)
    {
        
        $matakuliah = Matakuliah::where('Kd_Matkuliah', $id)->first();
        if ($matakuliah) {
            DB::table('tbl_matakuliah')->where('Kd_Matkuliah', $id)->delete();
        }
        return redirect('/sekprodi/matakuliah');
    }
}
