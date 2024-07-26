<x-layout>
  <main class="">
    <div class="flex gap-2">
      <a href="/skor" class="px-3 py-1 rounded-t-md bg-yellow-400">Tunggal</a>
      <a href="/formpasangan"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Pasangan</a>
      <a href="/formregu"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Regu</a>
      <a href="/formceritera"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Ceritera</a>
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
            <td>Orisinil</td>
            <td>Kekayaan Teknik</td>
            <td>Kemantapan Gerak</td>
            <td>Penampilan</td>
            <td>Total </td>
          </tr>
        </thead>
        <tbody>
          @foreach($skors as $index => $skor)
        <tr>
            <td> {{ $index + 1 }}</td>
            <td>{{ $skor['orisinil'] }}</td>
            <td>{{ $skor['kekayaan_teknik'] }}</td>
            <td>{{ $skor['kemantapan_gerak'] }}</td>
            <td>{{ $skor['penampilan'] }}</td>
            <td>{{ $skor['total'] }}</td>
        </tr>
    @endforeach
        </tbody>
      </table>


    </div>
</main>


</x-layout>

