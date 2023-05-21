<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas";
    public $timestamps= false;
    protected $primaryKey = 'Nim';
    public $incrementing = false;
    protected $fillable = [
        'Nim',
        'Nama',
        'kelas_id',
        //'Prodi',
        'Jurusan',
        'No_Handphone',
    ];
}
