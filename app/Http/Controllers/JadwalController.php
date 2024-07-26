<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Requests\JadwalRequest;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwals'] = Jadwal::all();
        return view('jadwal.jadwal', $data);
    }

    public function inputjadwal()
    {
        return view('jadwal.inputjadwal');
    }
    public function inputjadwalpeserta(JadwalRequest $r)
    {

        if ($r->validated()) {
            Jadwal::create([
                'nama' => $r->nama,
                'kontingen' => $r->kontingen,
                'tanggal_hari' => $r->tanggal_hari,
                'status' => $r->status,
            ]);
        }

        return redirect('/jadwal')->with('pesan', 'masukan data berhasi  berhasil');
    }
}
