<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Http\Requests\inputrequest;
use App\Models\registrasi;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.pendaftaran');
    }

    public function showPage(Request $request)
{
    $selectedOption = $request->input('option');

    // Tambahkan logika untuk konten yang berbeda berdasarkan $selectedOption
    return view('pendaftaran.pendaftaran', compact('selectedOption'));
}

    public function input(inputrequest $r)
    {

        if ($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('image/', $foto);
            $ktp = $r->ktp->getClientOriginalName();
            $r->ktp->move('image/', $ktp);
            $akta_lahir = $r->akta_lahir->getClientOriginalName();
            $r->akta_lahir->move('image/', $akta_lahir);
            $ijazah = $r->ijazah->getClientOriginalName();
            $r->ijazah->move('image/', $ijazah);


            $registration = registrasi::create();


            Pendaftar::create([
                'nama' => $r->nama,
                'id_registrasi' => $registration->id,
                'jen_kelamin' => $r->jen_kelamin,
                'tpt_lahir' => $r->tpt_lahir,
                'tgl_lahir' => $r->tgl_lahir,
                'tb' => $r->tb,
                'bb' => $r->bb,
                'kelas' => $r->kelas,
                'asal_sekolah' => $r->asal_sekolah,
                'kategori_tanding' => $r->kategori_tanding,
                'golongan' => $r->golongan,
                'kode_gr' => $r->kode_gr,
                'kelas_tanding_FK' => $r->kelas_tanding_FK,
                'kontingen' => $r->kontingen,
                'foto' => $foto,
                'ktp' => $ktp,
                'akta_lahir' => $akta_lahir,
                'ijazah' => $ijazah,
            ]);
        };

        return redirect('/')->with('pesan', 'registrasi berhasil');
    }


    public function tampiledit($id)
    {
        $data = Pendaftar::find($id);

        return view('pendaftaran.tampiledit', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Pendaftar::find($id);
        $data->update($request->all());

        return redirect('/')->with('pesan', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $data = Pendaftar::find($id);
        $data->delete();

        return redirect('/')->with('pesan', 'Data berhasil dihapus');
    }
}
