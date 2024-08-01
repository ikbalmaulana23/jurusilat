<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Kategori::create([

            'nama' => 'Tunggal',

        ]);

        Kategori::create([

            'nama' => 'Pasangan',

        ]);
        Kategori::create([

            'nama' => 'Regu',

        ]);
        Kategori::create([

            'nama' => 'Ceritera',

        ]);
    }
}
