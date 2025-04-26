<?php

namespace App\Http\Controllers\Sekprodi;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    Public function index()
    {	
        $lastDosen = Dosen::orderBy('Kd_Dosen', 'desc')->first();
        $dosen = Dosen::All();
        $prodi = Prodi::All();

        if ($lastDosen) {
            $lastId = $lastDosen->Kd_Ruangan;
            $number = (int) substr($lastId, 2);
            $lastDosens = '13' . str_pad($number + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $lastDosens = '130001';
        }
        return view('sekprodi.dosen', ['lastDosens' => $lastDosens, 'dosen' => $dosen, 'prodi' => $prodi]);
    }
    Public function store(Request $request)
    {
        Dosen::create([
            'Kd_Dosen' => $request->Kd_Dosen,
            'Kd_Prodi' => $request->Kd_Prodi,
            'Nidn_Dosen' => $request->Nidn_Dosen,
            'Nm_Dosen' => $request->Nm_Dosen,
            'Jk_Dosen' => $request->Jk_Dosen,
            'NoHp_Dosen' => $request->NoHp_Dosen,
            'Email_Dosen' => $request->Email_Dosen,
        ]);
        return redirect('/sekprodi/dosen')->with('success', 'Data Dosen Berhasil Ditambahkan');
    }
    Public function delete($id)
    {
        
        $dosen = Dosen::where('Kd_Dosen', $id)->first();
        if ($dosen) {
            DB::table('tbl_dosen')->where('Kd_Dosen', $id)->delete();
        }
        return redirect('/sekprodi/dosen');
    }
}
