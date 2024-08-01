<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\User;
use App\Models\SkorRegu;
use App\Models\Pendaftar;
use App\Models\SkorCeritera;
use App\Models\SkorPasangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DaftarJuriRequest;

class AdminController extends Controller
{
    public function index()
    {

        $data['jumlah'] = Pendaftar::get()->count();
        return view('admin.index', $data);
    }

    public function liveskor($id)
    {

        // $skor = Skor::with('pendaftar')->get();
        $data = [
            'peserta' => Pendaftar::find($id),
            'juri1' => Skor::where('id_juri', 1)->get(),
            'juri2' => Skor::where('id_juri', 2)->get(),
            'juri3' => Skor::where('id_juri', 3)->get(),

        ];


        return view('admin.liveskor', $data);
    }

    public function dashliveskor()
    {
        $data = [

            'detail_peserta_tunggal' => Pendaftar::get()

        ];

        return view('admin.dashliveskor', $data);
    }

    public function nilai()
    {
        $skor = Skor::with('pendaftar')->get();
        return view('admin.nilai', compact('skor'));
    }

    public function peserta()
    {
        $data['peserta'] = Pendaftar::where('id_kategori', 1)->get();
        return view('admin.peserta', $data);
    }

    public function pasangan()
    {
        $data['peserta'] = Pendaftar::where('id_kategori', 2)->get();
        return view('admin.pesertapasangan', $data);
    }

    public function regu()
    {
        $data['peserta'] = Pendaftar::where('id_kategori', 3)->get();
        return view('admin.pesertaregu', $data);
    }

    public function ceritera()
    {
        $data['peserta'] = Pendaftar::where('id_kategori', 4)->get();
        return view('admin.pesertaceritera', $data);
    }


    public function tambahjuri()
    {

        return view('admin.tambahjuri');
    }

    public function daftarjuri(DaftarJuriRequest $r)
    {
        if ($r->validated()) {
            User::create([
                'name' => $r->name,
                'password' => Hash::make($r->password)

            ]);

            return redirect('/admin/tambahjuri')->with('pesan', 'registrasi berhasil');
        }
    }
}
