<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skor extends Model
{
    use HasFactory;

    protected $table = 'skor';

    protected $fillable = ['peserta_id', 'id_registrasi', 'id_juri', 'orisinil', 'kekayaan_teknik', 'kemantapan_gerak', 'penampilan', 'total'];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'peserta_id');
    }

    public function juri()
    {
        return $this->belongsTo(User::class, 'id_juri');
    }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class, 'id_kategori');
    // }
}
