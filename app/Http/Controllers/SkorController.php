<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\SkorRegu;
use App\Models\SkorPasangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\tunggalrequest;
use App\Models\SkorCeritera;

class SkorController extends Controller
{


    // untuk perorangan mulai, dari 

    //view skor
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

    //view form
    public function skorlomba()
    {
        return view('penilaian.formtunggal');
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
        return view('penilaian.skorpasangan', compact('skors'));
    }
    //view form
    public function formpasangan()
    {


        return view('penilaian.formpasangan');
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

        return view('penilaian.skorregu', compact('skors'));
    }

    //view form regu
    public function formregu()
    {
        return view('penilaian.formregu');
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

        return view('penilaian.skorceritera', compact('skors'));
    }

    public function formceritera()
    {
        return view('penilaian.formceritera');
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
