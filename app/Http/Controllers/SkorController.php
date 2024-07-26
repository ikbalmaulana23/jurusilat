<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\tunggalrequest;
use App\Models\SkorPasangan;

class SkorController extends Controller
{
    public function index()
    {
        // $data['skor'] = Skor::all();
        $skors = Skor::all()->map(function ($skor) {
            return [
                'orisinil' => $skor->orisinil,
                'kekayaan_teknik' => $skor->kekayaan_teknik,
                'kemantapan_gerak' => $skor->kemantapan_gerak,
                'penampilan' => $skor->penampilan,
                'total' => $skor->orisinil + $skor->kekayaan_teknik + $skor->kemantapan_gerak + $skor->penampilan
            ];
        });



        return view('penilaian.skor', compact('skors'));
    }

    public function skorlomba()
    {
        return view('penilaian.formtunggal');
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
        return redirect('/skor')->with('pesan', 'input data berhasil');
    }

    public function formpasangan()
    {
        $skors = SkorPasangan::all()->map(function ($skor) {
            return [
                'orisinil' => $skor->orisinil,
                'kekayaan_teknik' => $skor->kekayaan_teknik,
                'kemantapan_gerak' => $skor->kemantapan_gerak,
                'penampilan' => $skor->penampilan,
                'total' => $skor->orisinil + $skor->kekayaan_teknik + $skor->kemantapan_gerak + $skor->penampilan
            ];
        });



        return view('penilaian.formpasangan', compact('skors'));
    }


    public function pasangan(tunggalrequest $r)
    {

        if ($r->validated()) {
            SkorPasangan::create([
                'orisinil' => $r->orisinil,
                'kekayaan_teknik' => $r->kekayaan_teknik,
                'kemantapan_gerak' => $r->kemantapan_gerak,
                'penampilan' => $r->penampilan
            ]);
        }
        return redirect('/skor')->with('pesan', 'input data berhasil');
    }

    public function formregu()
    {
        return view('penilaian.formregu');
    }
}
