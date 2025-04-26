<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'tbl_dosen';
    protected $fillable = [
        'Kd_Dosen',
        'Kd_Prodi',
        'Nidn_Dosen',
        'Nm_Dosen',
        'Jk_Dosen',
        'NoHp_Dosen',
        'Email_Dosen'
    ];
    public $timestamps = false;
}
