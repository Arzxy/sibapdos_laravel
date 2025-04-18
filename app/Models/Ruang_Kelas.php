<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang_Kelas extends Model
{
    use HasFactory;
    protected $table = 'tbl_ruangankelas';
    protected $primaryKey = 'Kd_Ruangan';
    protected $fillable = ['Kd_Ruangan ', 'Nm_Ruangan', 'Jml_Kapasitas'];
    public $timestamps = false;
}
