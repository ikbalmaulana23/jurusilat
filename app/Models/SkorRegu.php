<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkorRegu extends Model
{
    use HasFactory;

    protected $fillable = ['orisinil', 'kekayaan_teknik', 'kemantapan_gerak', 'penampilan'];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'peserta_id');
    }
}
