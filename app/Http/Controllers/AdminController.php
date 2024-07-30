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
        return view('admin.index');
    }

    public function liveskor()
    {
        return view('admin.liveskor');
    }

    public function nilai()
    {


        $skorRegus = Skor::with('pendaftar')->get();

        return view('admin.nilai', compact('skorRegus'));
    }

    public function peserta()
    {
        $data['peserta'] = Pendaftar::get();
        return view('admin.peserta', $data);
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
