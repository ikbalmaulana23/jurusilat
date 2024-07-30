<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['peserta'] = Pendaftar::get();
        return view('dashboard', $data);
    }

    public function jadwal()
    {
        $data['jadwals'] = Jadwal::all();
        return view('jadwal.jadwal',  $data);
    }
}
