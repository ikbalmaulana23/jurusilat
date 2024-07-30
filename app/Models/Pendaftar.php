<?php

namespace App\Models;

use App\Models\SkorRegu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';

    protected $fillable = ['nama', 'jen_kelamin', 'tpt_lahir', 'tgl_lahir', 'tb', 'bb', 'kelas', 'asal_sekolah', 'kategori_tanding', 'golongan', 'kode_gr', 'kelas_tanding_FK', 'kontingen', 'foto', 'ktp', 'akta_lahir', 'ijazah'];

    public function skorRegus()
    {
        return $this->hasMany(SkorRegu::class, 'peserta_id');
    }
}
