<x-layout>
    <main class="">
      <div class="flex gap-2">
        
        <a href="/skor"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Tunggal</a>
        <a href="/skorpasangan" class="px-3 py-1 rounded-t-md bg-yellow-400">Pasangan</a>
        <a href="/skorregu"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Regu</a>
        <a href="/skorceritera"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Ceritera</a>
      </div>
      <div class="container md:mx-auto mb-5 border pt-10">
  
     
        
        <a href="/formpasangan" class="px-6 py-3.5 text-base font-medium text-white bg-blue-600 hozver:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Mulai Penilaian Pasangan</a>
          
        <p class="text-center font-semibold my-3">Pasangan</p>
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
  
  