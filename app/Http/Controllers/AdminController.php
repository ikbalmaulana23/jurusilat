<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\SkorRegu;
use App\Models\Pendaftar;
use App\Models\SkorCeritera;
use App\Models\SkorPasangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


        $skorRegus = SkorRegu::with('pendaftar')->get();

        return view('admin.nilai', compact('skorRegus'));
    }

    public function peserta()
    {
        $data['peserta'] = Pendaftar::get();
        return view('admin.peserta', $data);
    }
}
