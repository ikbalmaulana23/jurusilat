<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class JuriController extends Controller
{
    public function index()
    {
        $data = [


            'skor' => Skor::all(),
            'detail_peserta_tunggal' => Pendaftar::get()

        ];
        return view('juri.index', $data);
    }

    public function rekapnilai()
    {
        $data = [
            'skor' => Skor::all(),

        ];
        return view('juri.rekapnilai', $data);
    }
}
