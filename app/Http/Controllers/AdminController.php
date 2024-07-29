<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use Illuminate\Http\Request;

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
        $data['nilai'] = Skor::get();

        return view('admin.nilai', $data);
    }

    public function peserta()
    {
        return view('admin.peserta');
    }
}
