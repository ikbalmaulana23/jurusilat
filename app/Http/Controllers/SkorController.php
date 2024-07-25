<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use Illuminate\Http\Request;
use App\Http\Requests\tunggalrequest;

class SkorController extends Controller
{
    public function index()
    {

        return view('penilaian.skor');
    }

    public function skorlomba()
    {
        return view('penilaian.skorlomba');
    }

    public function tunggal(tunggalrequest $r)
    {

        if ($r->validated()) {
            Skor::create([
                'orisinil' => $r->orisinil,
                'kekayaan_teknik' => $r->kekayaan_teknik,
                'kemantapan_gerak' => $r->kemantapan_gerak,
                'penampilan' => $r->penampilan
            ]);
        }
        return redirect('/')->with('pesan', 'input data berhasil');
    }


    public function formregu()
    {
        return view('penilaian.formregu');
    }
}
