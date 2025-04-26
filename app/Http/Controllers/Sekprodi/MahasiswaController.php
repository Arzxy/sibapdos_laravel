<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    Public function index()
    {	
        $mahasiswa = Mahasiswa::All();
        $prodi = Prodi::All();
        return view('sekprodi.mahasiswa', ['mahasiswa' => $mahasiswa, 'prodi' => $prodi]);
    }
    Public function store(Request $request)
    {
        Mahasiswa::create([
            'NIK_Mhs' => $request->NIK_Mhs,
            'Nm_Mhs' => $request->Nm_Mhs,
            'JK_Mhs' => $request->JK_Mhs,
            'tmptlahir_Mhs' => $request->tmptlahir_Mhs,
            'TglLahir_Mhs' => $request->TglLahir_Mhs,
            'Alamat_Mhs' => $request->Alamat_Mhs,
            'Kd_Prodi' => $request->Kd_Prodi,
            'Status_Mhs' => $request->Status_Mhs,
        ]);
        return redirect('/sekprodi/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }
    Public function delete($id)
    {
        
        $ruang = Mahasiswa::where('NIK_Mhs', $id)->first();
        if ($ruang) {
            DB::table('tbl_mahasiswa')->where('NIK_Mhs', $id)->delete();
        }
        return redirect('/sekprodi/mahasiswa');
    }
}
