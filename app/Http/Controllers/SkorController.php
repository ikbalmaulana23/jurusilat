<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\SkorRegu;
use App\Models\Pendaftar;
use App\Models\SkorCeritera;
use App\Models\SkorPasangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\tunggalrequest;

class SkorController extends Controller
{


    // untuk perorangan mulai, dari 

    //view skor
    public function index()
    {
        $data = [


            'skor' => Skor::all(),
            'detail_peserta_tunggal' => Pendaftar::get()

        ];

        return view('juri.skor',  $data);
    }

    //view form
    public function skorlomba()
    {
        return view('juri.formtunggal');
    }


    //untuk post input perorangan
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


    //view skor pasangan
    public function skorpasangan()
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
        return view('juri.skorpasangan', compact('skors'));
    }
    //view form
    public function formpasangan()
    {


        return view('juri.formpasangan');
    }
    //post input
    public function inputpasangan(tunggalrequest $r)
    {

        if ($r->validated()) {
            SkorPasangan::create([
                'orisinil' => $r->orisinil,
                'kekayaan_teknik' => $r->kekayaan_teknik,
                'kemantapan_gerak' => $r->kemantapan_gerak,
                'penampilan' => $r->penampilan
            ]);
        }
        return redirect('/skorpasangan')->with('pesan', 'input data berhasil');
    }

    //view skor regu
    public function skorregu()
    {
        $skors = SkorRegu::all()->map(function ($skor) {
            return [
                'orisinil' => $skor->orisinil,
                'kekayaan_teknik' => $skor->kekayaan_teknik,
                'kemantapan_gerak' => $skor->kemantapan_gerak,
                'penampilan' => $skor->penampilan,
                'total' => $skor->orisinil + $skor->kekayaan_teknik + $skor->kemantapan_gerak + $skor->penampilan
            ];
        });

        return view('juri.skorregu', compact('skors'));
    }

    //view form regu
    public function formregu()
    {
        return view('juri.formregu');
    }

    //post input regu
    public function inputregu(tunggalrequest $r)
    {

        if ($r->validated()) {
            SkorRegu::create([
                'orisinil' => $r->orisinil,
                'kekayaan_teknik' => $r->kekayaan_teknik,
                'kemantapan_gerak' => $r->kemantapan_gerak,
                'penampilan' => $r->penampilan
            ]);
        }
        return redirect('/skorregu')->with('pesan', 'input data berhasil');
    }


    public function skorceritera()
    {
        $skors = SkorCeritera::all()->map(function ($skor) {
            return [
                'orisinil' => $skor->orisinil,
                'kekayaan_teknik' => $skor->kekayaan_teknik,
                'kemantapan_gerak' => $skor->kemantapan_gerak,
                'penampilan' => $skor->penampilan,
                'total' => $skor->orisinil + $skor->kekayaan_teknik + $skor->kemantapan_gerak + $skor->penampilan
            ];
        });

        return view('juri.skorceritera', compact('skors'));
    }

    public function formceritera()
    {
        return view('juri.formceritera');
    }


    public function inputceritera(tunggalrequest $r)
    {

        if ($r->validated()) {
            SkorCeritera::create([
                'orisinil' => $r->orisinil,
                'kekayaan_teknik' => $r->kekayaan_teknik,
                'kemantapan_gerak' => $r->kemantapan_gerak,
                'penampilan' => $r->penampilan
            ]);
        }
        return redirect('/skorceritera')->with('pesan', 'input data berhasil');
    }
}
