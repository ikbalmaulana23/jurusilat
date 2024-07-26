<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorPasangan extends Model
{
    use HasFactory;

    protected $table = 'skor_pasangan';

    protected $fillable = ['orisinil', 'kekayaan_teknik', 'kemantapan_gerak', 'penampilan'];
}
