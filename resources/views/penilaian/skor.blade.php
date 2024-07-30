<x-layout>
  <main class="">
    <div class="flex gap-2">
      <a href="/skor" class="px-3 py-1 rounded-t-md bg-yellow-400">Tunggal</a>
      <a href="/skorpasangan"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Pasangan</a>
      <a href="/skorregu"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Regu</a>
      <a href="/skorceritera"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Ceritera</a>
    </div>
    <div class="container md:mx-auto mb-5 border">

      <br>
        <a href="/skorlomba" class="px-6 py-3.5 text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Mulai Penilaian Tunggal</a>




    {{-- @dd($skors) --}}

      <p class="text-center font-semibold my-3">Tunggal</p>
      <table class="w-full">
      <thead>
          <tr>
            <td>No</td>
            <td> Nama</td>
            <td>Orisinil</td>
            <td>Kekayaan Teknik</td>
            <td>Kemantapan Gerak</td>
            <td>Penampilan</td>
            <td>Total </td>
            <td>Aksi </td>
          </tr>
        </thead>
        <tbody>
          

          @foreach($skor as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->pendaftar->nama }}</td> <!-- Menampilkan nama pendaftar -->
                            <td>{{ $item->orisinil }}</td>
                            <td>{{ $item->kekayaan_teknik }}</td>
                            <td>{{ $item->kemantapan_gerak }}</td>
                            <td>{{ $item->penampilan }}</td>
                        </tr>
                        @endforeach
        </tbody>
      </table>


    </div>
</main>


</x-layout>

