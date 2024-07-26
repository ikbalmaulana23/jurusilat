<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorCeritera extends Model
{
    use HasFactory;

    protected $fillable = ['orisinil', 'kekayaan_teknik', 'kemantapan_gerak', 'penampilan'];
}
