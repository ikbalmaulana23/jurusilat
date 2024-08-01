<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = ['id', 'nama'];

    // public function kategori()
    // {
    //     return $this->hasMany(Skor::class, 'id_kategori');
    // }
}
