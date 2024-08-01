<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Juri Silat Sumatera Barat</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->

  <body class="relative bg-red-200 overflow-hidden max-h-screen">
    <header class="fixed right-0 top-0 left-60 bg-red-200 py-3 px-4 h-16">
      <div class="max-w-6xl mx-auto">


        <div class="text-lg  mt-4 font-serif">Sistem Digital Score Silat Tradisional di Sumatera Barat</div>

      </div>
    </header>

    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
      <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
          <div class="px-4 py-6 text-center border-b">
            <h1 class="text-xl font-bold leading-none ">Juri Silat</h1>
          </div>
          <div class="p-4">
            <ul class="space-y-1">
              <li>
                <a href="/juri" class="flex items-center bg-red-200 rounded-xl font-bold text-sm text-red-900 py-3 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                  </svg>Mulai Penjurian
                </a>
              </li>
              <li>
                <a href="/rekapnilai" class="flex bg-white hover:bg-red-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                  </svg>Rekap Nilai
                </a>
              </li>

            </ul>
          </div>
        </div>
        <div class="p-4">
          <button type="button" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
          </button> <span class="font-bold text-sm ml-2">Logout</span>
        </div>
      </div>
    </aside>

    <main class="ml-60 pt-10 max-h-screen overflow-auto">
      <div class="px-6 py-8">
        <div class="max-w-6xl mx-auto">
          <div class="bg-white p-3 mb-5">

            <div class="flex gap-2">
              <a href="/juri" class="px-3 py-1 rounded-t-md hover:bg-blue-300">Tunggal</a>
              <a href="/juri/pasangan" class="px-3 py-1  bg-yellow-400 rounded-t-md border ">Pasangan</a>
              <a href="/juri/regu" class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Regu</a>
              <a href="/juri/ceritera" class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Ceritera</a>
            </div>
            <div class="container md:mx-auto mb-5 ">


              <div class=" m-5 py-5 grid grid-cols-4 gap-3">
                {{-- @dd($detail_peserta_tunggal) --}}
                @foreach ($detail_peserta_pasangan as $pasangan )

                <div class=" p-5 border rounded-md shadow-md  ">
                  <p>Nama Peserta : <span class="font-semibold">{{ $pasangan->nama}}</span> </p>
                  <p>Golongan : {{ $pasangan->golongan}} </p>
                  <p class="mb-3">Kontingen : {{ $pasangan->kontingen}} </p>

                  <div class="flex justify-center">
                    <a href="/skorlomba/{{$pasangan->id}}" class=" my-2 px-2 py-1 bg-green-700 text-white rounded-md">Nilai Peserta ini</a>
                  </div>



                </div>
                @endforeach

              </div>



              {{-- @dd($skors) --}}
              {{--
            <p class="text-center font-semibold my-3"> Hasil PenilaianTunggal</p>
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

              --}}
            </div>

          </div>
        </div>
      </div>
    </main>
  </body>
  <!-- partial -->

</body>

</html>