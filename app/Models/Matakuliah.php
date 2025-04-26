<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'tbl_matakuliah';
    protected $fillable = [
        'Kd_Matkuliah',
        'Nm_Matakuliah',
        'Sks_Matakuliah',
        'Teori_Matkuliah',
        'Praktek_Matkuliah',
        'Smester_Matakuliah'
    ];
    public $timestamps = false;
}
