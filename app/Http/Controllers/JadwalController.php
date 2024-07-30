<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Requests\JadwalRequest;
use App\Models\Pendaftar;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwals'] = Jadwal::all();
        return view('admin.tambahjadwal', $data);
    }

    public function inputjadwal()
    {
        $data['peserta'] = Pendaftar::all();
        return view('jadwal.inputjadwal', $data);
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

        return redirect('/admin/tambahjadwal')->with('pesan', 'masukan data berhasi  berhasil');
    }
}
