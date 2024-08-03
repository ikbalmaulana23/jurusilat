<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\Pendaftar;
use App\Models\registrasi;
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

        $r->validate([
            'peserta' => 'required',
            'peserta.*.nama' => 'required',
            'peserta.*.jen_kelamin' => 'required',
            'peserta.*.tpt_lahir' => 'required',
            'peserta.*.tgl_lahir' => 'required',
            'peserta.*.tb' => 'required',
            'peserta.*.bb' => 'required',
            'peserta.*.kelas' => 'required',
            'peserta.*.asal_sekolah' => 'required',

            'peserta.*.golongan' => 'required',

            'peserta.*.kontingen' => 'required',

        ], [
            'peserta.required' => 'Data peserta diperlukan.',
            'peserta.*.nama.required' => 'nama harus diisi',
            'peserta.*.jen_kelamin.required' => 'jenis kelamin harus diisi',
            'peserta.*.tpt_lahir.required' => 'tempat lahir harus diisi',
            'peserta.*.tgl_lahir.required' => 'tanggal lahir harus diisi',
            'peserta.*.tb.required' => 'tinggi badan harus diisin',
            'peserta.*.bb.required' => 'berat badan harus diiisi',
            'peserta.*.kelas.required' => 'kelas harus diisi',
            'peserta.*.asal_sekolah.required' => 'asal sekolah harus diisi',
            'peserta.*.golongan.required' => 'golongan harus diisi',
            'peserta.*.kontingen.required' => 'kontingen harus diisi',

        ]);

        // $registration = registrasi::create();

        $registration = Registrasi::create([
            'id_kategori' => $r->input('id_kategori')
        ]);


        foreach ($r->peserta as $dataPeserta) {

            $foto = null;
            $ktp = null;
            $akta_lahir = null;
            $ijazah = null;


            if (isset($dataPeserta['foto'])) {
                $foto = $dataPeserta['foto']->getClientOriginalName();
                $dataPeserta['foto']->move('image/', $foto);
            }

            if (isset($dataPeserta['ktp'])) {
                $ktp = $dataPeserta['ktp']->getClientOriginalName();
                $dataPeserta['ktp']->move('image/', $ktp);
            }

            if (isset($dataPeserta['akta_lahir'])) {
                $akta_lahir = $dataPeserta['akta_lahir']->getClientOriginalName();
                $dataPeserta['akta_lahir']->move('image/', $akta_lahir);
            }

            if (isset($dataPeserta['ijazah'])) {
                $ijazah = $dataPeserta['ijazah']->getClientOriginalName();
                $dataPeserta['ijazah']->move('image/', $ijazah);
            }
            Pendaftar::create([
                'id_registrasi' => $registration->id,
                'id_kategori' => $dataPeserta['kategori'],
                'nama' => $dataPeserta['nama'],
                'jen_kelamin' => $dataPeserta['jen_kelamin'],
                'tpt_lahir' => $dataPeserta['tpt_lahir'],
                'tgl_lahir' => $dataPeserta['tgl_lahir'],
                'tb' => $dataPeserta['tb'],
                'bb' => $dataPeserta['bb'],
                'kelas' => $dataPeserta['kelas'],
                'asal_sekolah' => $dataPeserta['asal_sekolah'],
                // 'kategori_tanding' => $dataPeserta['kategori_tanding'],
                'golongan' => $dataPeserta['golongan'],
                // 'kode_gr' => $dataPeserta['kode_gr'],
                // 'kelas_tanding_FK' => $dataPeserta['kelas_tanding_FK'],
                'kontingen' => $dataPeserta['kontingen'],
                'foto' => $foto,
                'ktp' => $ktp,
                'akta_lahir' => $akta_lahir,
                'ijazah' => $ijazah,

            ]);
        }

        return redirect('/')->with('alert', 'registrasi berhasil');
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

        return redirect('/admin/peserta')->with('pesan', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $pendaftarId = $id; // ID dari pendaftar yang ingin dihapus

        // Hapus data terkait di tabel `skor`
        Skor::where('peserta_id', $pendaftarId)->delete();

        // Hapus data dari tabel `pendaftar`
        Pendaftar::destroy($pendaftarId);

        return redirect('/admin/peserta')->with('pesan', 'Data berhasil dihapus');
    }
}
