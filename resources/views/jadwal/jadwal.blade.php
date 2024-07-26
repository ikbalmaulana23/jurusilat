<x-layout>

  <h1 class="text-lg font-semibold text-center">HALAMAN JADWAL</h1>

  <a href="/inputjadwal" class="bg-red-500 px-3 py-2 text-white rounded-md">Input Jadwal Peserta</a>

  <div class="border mt-10 flex">
<table class="w-full">
  <thead>  <tr>
    <td>No</td>
    <td>Nama</td>
    <td>Kontingen</td>
    <td>Tanggal/Hari</td>
    <td>Status</td>
  </tr>
</thead>
<tbody>
    @foreach ($jadwals as $jadwal )
    <tr>
      <td>1</td>
      <td>{{ $jadwal->nama }}</td>
      <td>{{ $jadwal->kontingen }}</td>
      <td>{{ $jadwal->tanggal_hari }}</td>
      <td>{{ $jadwal->status }}</td>
    </tr>
      
    @endforeach


</tbody>
</table>


  </div>
</x-layout>