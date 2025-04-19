<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tbl_mahasiswa';
    protected $primaryKey = 'NIK_Mhs';
    protected $fillable = [
        'NIK_Mhs',
        'Nm_Mhs',
        'JK_Mhs',
        'tmptlahir_Mhs',
        'TglLahir_Mhs',
        'Alamat_Mhs',
        'Kd_Prodi',
        'Status_Mhs'
    ];
    public $timestamps = false;
}
