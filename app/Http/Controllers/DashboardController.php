<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard');
    }

    public function jadwal()
    {
        $data['jadwals'] = Jadwal::all();
        return view('jadwal.jadwal',  $data);
    }
}
