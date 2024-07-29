<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Http\Requests\inputrequest;

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

    public function input(Request $r)
    {


        // Ambil data peserta tunggal jika ada
        $peserta_tunggal = null;
        if ($r->filled('nama')) {
            $r->validate([
                'jen_kelamin' => 'required',
                'tpt_lahir' => 'required',
                'tgl_lahir' => 'required',
                'tb' => 'required',
                'bb' => 'required',
                'kelas' => 'required',
                'asal_sekolah' => 'required',
                'kategori_tanding' => 'required',
                'golongan' => 'required',
                'kode_gr' => 'required',
                'kelas_tanding_FK' => 'required',
                'kontingen' => 'required',
                'foto' => 'required',
                'ktp' => 'required',
                'akta_lahir' => 'required',
                'ijazah' => 'required',
            ],[
                'jen_kelamin.required' => 'jenis kelamin harus diisi',
                'tpt_lahir.required' => 'tempat lahir harus diisi',
                'tgl_lahir.required' => 'tanggal lahir harus diisi',
                'tb.required' => 'tinggi badan harus diisin',
                'bb.required' => 'berat badan harus diiisi',
                'kelas.required.required' => 'kelas harus diisi',
                'asal_sekolah.required' => 'asal sekolah harus diisi',
                'kategori_tanding.required' => 'kategori tanding harus diisi',
                'golongan.required' => 'golongan harus diisi',
                'kode_gr.required' => 'kode gr harus diisi',
                'kelas_tanding_FK.required' => 'kelas tanding FK harus diisi',
                'kontingen.required' => 'kontingen harus diisi',
                'foto.required' => 'foto harus diisi',
                'ktp.required' => 'ktp harus diisi',
                'akta_lahir.required' => 'akta kelahiran harus diisi',
                'ijazah.required' => 'ijazah harus diisi'
            ]);

                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('image/', $foto);
                $ktp = $r->ktp->getClientOriginalName();
                $r->ktp->move('image/', $ktp);
                $akta_lahir = $r->akta_lahir->getClientOriginalName();
                $r->akta_lahir->move('image/', $akta_lahir);
                $ijazah = $r->ijazah->getClientOriginalName();
                $r->ijazah->move('image/', $ijazah);

            $peserta_tunggal = [
                'nama' => $r->nama,
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
            ];
        }

        // Ambil data peserta 1 jika ada
        $peserta1 = null;
        if ($r->filled('peserta1_nama')) {
            $r->validate([
                'peserta1_jen_kelamin' => 'required',
                'peserta1_tpt_lahir' => 'required',
                'peserta1_tgl_lahir' => 'required',
                'peserta1_tb' => 'required',
                'peserta1_bb' => 'required',
                'peserta1_kelas' => 'required',
                'peserta1_asal_sekolah' => 'required',
                'peserta1_kategori_tanding' => 'required',
                'peserta1_golongan' => 'required',
                'peserta1_kode_gr' => 'required',
                'peserta1_kelas_tanding_FK' => 'required',
                'peserta1_kontingen' => 'required',
                'peserta1_foto' => 'required',
                'peserta1_ktp' => 'required',
                'peserta1_akta_lahir' => 'required',
                'peserta1_ijazah' => 'required',
            ],[
                'peserta1_jen_kelamin.required' => 'jenis kelamin harus diisi',
                'peserta1_tpt_lahir.required' => 'tempat lahir harus diisi',
                'peserta1_tgl_lahir.required' => 'tanggal lahir harus diisi',
                'peserta1_tb.required' => 'tinggi badan harus diisin',
                'peserta1_bb.required' => 'berat badan harus diiisi',
                'peserta1_kelas.required.required' => 'kelas harus diisi',
                'peserta1_asal_sekolah.required' => 'asal sekolah harus diisi',
                'peserta1_kategori_tanding.required' => 'kategori tanding harus diisi',
                'peserta1_golongan.required' => 'golongan harus diisi',
                'peserta1_kode_gr.required' => 'kode gr harus diisi',
                'peserta1_kelas_tanding_FK.required' => 'kelas tanding FK harus diisi',
                'peserta1_kontingen.required' => 'kontingen harus diisi',
                'peserta1_foto.required' => 'foto harus diisi',
                'peserta1_ktp.required' => 'ktp harus diisi',
                'peserta1_akta_lahir.required' => 'akta kelahiran harus diisi',
                'peserta1_ijazah.required' => 'ijazah harus diisi'
            ]);

                $foto1 = $r->peserta1_foto->getClientOriginalName();
                $r->peserta1_foto->move('image/', $foto1);
                $ktp1 = $r->peserta1_ktp->getClientOriginalName();
                $r->peserta1_ktp->move('image/', $ktp1);
                $akta_lahir1 = $r->peserta1_akta_lahir->getClientOriginalName();
                $r->peserta1_akta_lahir->move('image/', $akta_lahir1);
                $ijazah1 = $r->peserta1_ijazah->getClientOriginalName();
                $r->peserta1_ijazah->move('image/', $ijazah1);
            $peserta1 = [
                'nama' => $r->peserta1_nama,
                'jen_kelamin' => $r->peserta1_jen_kelamin,
                 'tpt_lahir' => $r->peserta1_tpt_lahir,
                'tgl_lahir' => $r->peserta1_tgl_lahir,
                'tb' => $r->peserta1_tb,
                'bb' => $r->peserta1_bb,
                'kelas' => $r->peserta1_kelas,
                'asal_sekolah' => $r->peserta1_asal_sekolah,
                'kategori_tanding' => $r->peserta1_kategori_tanding,
                'golongan' => $r->peserta1_golongan,
                'kode_gr' => $r->peserta1_kode_gr,
                'kelas_tanding_FK' => $r->peserta1_kelas_tanding_FK,
                'kontingen' => $r->peserta1_kontingen,
                'foto' => $foto1,
                'ktp' => $ktp1,
                'akta_lahir' => $akta_lahir1,
                'ijazah' => $ijazah1,
            ];
        }

        // Ambil data peserta 2 jika ada
        $peserta2 = null;
        if ($r->filled('peserta2_nama')) {
            $peserta2 = [
                'nama' => $r->input('peserta2_nama'),
                // Ambil field lainnya untuk peserta 2
            ];
        }

        // Simpan atau proses data peserta tunggal, peserta 1, dan peserta 2
        if ($peserta_tunggal) {
            // Simpan peserta tunggal ke database
            Pendaftar::create($peserta_tunggal);
        }
        if ($peserta1) {
            // Simpan peserta 1 ke database
            Pendaftar::create($peserta1);
        }
        if ($peserta2) {
            // Simpan peserta 2 ke database
            Pendaftar::create($peserta2);
        }

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');

        // if ($r->validated()) {
        //     $foto = $r->foto->getClientOriginalName();
        //     $r->foto->move('image/', $foto);
        //     $ktp = $r->ktp->getClientOriginalName();
        //     $r->ktp->move('image/', $ktp);
        //     $akta_lahir = $r->akta_lahir->getClientOriginalName();
        //     $r->akta_lahir->move('image/', $akta_lahir);
        //     $ijazah = $r->ijazah->getClientOriginalName();
        //     $r->ijazah->move('image/', $ijazah);


        //     Pendaftar::create([
        //         'nama' => $r->nama,
        //         'jen_kelamin' => $r->jen_kelamin,
        //         'tpt_lahir' => $r->tpt_lahir,
        //         'tgl_lahir' => $r->tgl_lahir,
        //         'tb' => $r->tb,
        //         'bb' => $r->bb,
        //         'kelas' => $r->kelas,
        //         'asal_sekolah' => $r->asal_sekolah,
        //         'kategori_tanding' => $r->kategori_tanding,
        //         'golongan' => $r->golongan,
        //         'kode_gr' => $r->kode_gr,
        //         'kelas_tanding_FK' => $r->kelas_tanding_FK,
        //         'kontingen' => $r->kontingen,
        //         'foto' => $foto,
        //         'ktp' => $ktp,
        //         'akta_lahir' => $akta_lahir,
        //         'ijazah' => $ijazah,
        //     ]);
        // };

        // return redirect('/')->with('pesan', 'registrasi berhasil');
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
