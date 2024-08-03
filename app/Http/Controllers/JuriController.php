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

            'detail_peserta_tunggal' => Pendaftar::where('id_kategori', 1)->get(),

        ];
        return view('juri.index', $data);
    }


    public function indexpasangan()
    {
        $data = [

            'detail_peserta_pasangan' => Pendaftar::where('id_kategori', 2)->get(),

        ];
        return view('juri.indexpasangan', $data);
    }

    public function indexregu()
    {
        $data = [

            'detail_peserta_regu' => Pendaftar::where('id_kategori', 3)->get(),

        ];

        return view('juri.indexregu', $data);
    }


    public function indexceritera()
    {
        $data = [
            'detail_peserta_ceritera' => Pendaftar::where('id_kategori', 4)->get(),
        ];

        return view('juri.indexceritera', $data);
    }


    public function rekapnilai()
    {
        $data = [
            'skor' => Skor::where('id_kategori', 1)->get(),


        ];
        return view('juri.rekapnilai', $data);
    }

    public function rekapnilaipasangan()
    {
        $data = [
            'skor' => Skor::where('id_kategori', 2)->get(),


        ];
        return view('juri.rekapnilaipasangan', $data);
    }

    public function rekapnilairegu()
    {
        $data = [
            'skor' => Skor::where('id_kategori', 3)->get(),


        ];
        return view('juri.rekapnilairegu', $data);
    }

    public function rekapnilaiceritera()
    {
        $data = [
            'skor' => Skor::where('id_kategori', 4)->get(),


        ];
        return view('juri.rekapnilaiceritera', $data);
    }
}
