<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';

    protected $fillable = ['nama', 'id_registrasi', 'jen_kelamin', 'tpt_lahir', 'tgl_lahir', 'tb', 'bb', 'kelas', 'asal_sekolah', 'kategori_tanding', 'golongan', 'kode_gr', 'kelas_tanding_FK', 'kontingen', 'foto', 'ktp', 'akta_lahir', 'ijazah'];
}
