<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    protected $table = 'skor';

    protected $fillable = ['id_register', 'orisinil', 'kekayaan_teknik', 'kemantapan_gerak', 'penampilan'];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'peserta_id');
    }
}
