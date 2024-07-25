<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkorController extends Controller
{
    public function index()
    {

        return view('skor');
    }

    public function skorlomba()
    {
        return view('skorlomba');
    }
}
