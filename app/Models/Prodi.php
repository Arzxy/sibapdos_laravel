<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'tbl_matakuliah';
    protected $primaryKey = 'Kd_Prodi';
    protected $fillable = [
        'Kd_Prodi',
        'Nm_Prodi'
    ];
    public $timestamps = false;
}
