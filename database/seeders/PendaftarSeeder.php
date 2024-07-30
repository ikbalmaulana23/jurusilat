<?php

namespace Database\Seeders;

use App\Models\Pendaftar;
use Illuminate\Database\Seeder;
use Database\Factories\PendaftarFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftar::factory()->count(10)->create();
    }
}
