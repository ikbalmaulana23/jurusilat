<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function masuk(LoginRequest $r)
    {
        if ($r->validated()) {
            if (Auth::guard('web')->attempt([
                'name' => $r->name,
                'password' => $r->password
            ])) {
                return redirect('/dashboard')->with('pesan', 'berhasil login');
            } else {
                return back()->with('pesan', 'login gagal');
            }
        }
    }

    public function daftar(RegisterRequest $r)
    {
        if ($r->validated()) {
            User::create([
                'name' => $r->name,

                'email' => $r->email,
                'password' => Hash::make($r->password)

            ]);

            return redirect('login')->with('pesan', 'registrasi berhasil');
        }
    }
}
