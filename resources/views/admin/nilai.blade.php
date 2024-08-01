<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin | Juri Silat</title>
    <style>
      .rotate-45 {
        --transform-rotate: 45deg;
        transform: rotate(45deg);
      }

      .group:hover .group-hover\:flex {
        display: flex;
      }

     
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
<body>
<!-- partial:index.partial.html -->
<div class="flex w-screen h-screen text-gray-800">

	<!-- Component Start -->
            <div class="flex flex-col items-center w-16 pb-4 overflow-auto border-r border-gray-300">
                <a class="flex items-center justify-center flex-shrink-0 w-full h-16 " href="#">
                    <svg class="w-8 h-8"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded bg-blue-100 hover:bg-blue-200" href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
                    <svg class="w-5 h-5"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </a>
                <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-col w-56 border-r border-gray-300">
                <button class="relative text-sm focus:outline-none group">
                    <div class="flex items-center justify-between w-full h-16 px-4 border-b border-gray-300  bg-red-500">
                       <p class="text-white font-semibold text-xl">Admin</p>
                      
                    </div>
               
                </button>
                <div class="flex flex-col flex-grow p-4 overflow-auto gap-3">
                   
                   <x-linkadmin></x-linkadmin>
                    
                </div>

            </div>
            <div class="flex flex-col flex-grow">
                <div class="flex items-center justify-between  h-16 px-8 border-b border-gray-300">
                    <h1 class="text-lg font-medium">Sistem Digital Score  Silat Tradisional di Sumatera Barat</h1>
                  
                    <div class=" flex gap-2">
                        <p class=" px-2 py-1 text-lg font-serif">{{ optional(auth()->user())->name
           ?? ''}}</p> 
           <p class="px-2 py-1">|</p>
                    <a href="/logout" class="bg-yellow-500 px-2 py-1 rounded-md ">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                  
                  
                </div>
                <div class="flex-grow p-6 overflow-auto bg-gray-200">
                   
                      <div class="rounded-lg bg-white p-5" id="printableArea"> 
                        <p class="text-center text-lg font-semibold">Rekap  Nilai Peserta Silat Sumatera Barat</p>
                        
                        <div class="flex justify-end">
                        <button onclick="window.print('printableArea')"  class="bg-blue-600 px-2 py-1 text-white rounded-md mb-3">Print halaman ini</button>                    
                    </div>
                        <table class="w-full">
                            <thead>
                                <tr>
                                  <td>No</td>
                                  <td> Nama</td>
                                  <td>Juri</td>
                                  <td>Orisinil</td>
                                  <td>Kekayaan Teknik</td>
                                  <td>Kemantapan Gerak</td>
                                  <td>Penampilan</td>
                                  <td>Total </td>
                                  <td>Aksi </td>
                                </tr>
                              </thead>
                              <tbody>
                        @foreach($skor as $sk)
                        <tr>
                            <td>1</td>
                            <td>{{ $sk->pendaftar->nama }}</td> <!-- Menampilkan nama pendaftar -->
                            <td>{{ $sk->id_juri }}</td>
                            <td>{{ $sk->orisinil }}</td>
                            <td>{{ $sk->kekayaan_teknik }}</td>
                            <td>{{ $sk->kemantapan_gerak }}</td>
                            <td>{{ $sk->penampilan }}</td>
                            <td>{{ $sk->total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
          
                    </div>
            </div>
        

</div>


<script>
    function printElement(elementId) {
        var element = document.getElementById(printableArea);
        var newWindow = window.open('', '', 'height=600,width=800');
        newWindow.document.write('<html><head><title>Print</title>');
        newWindow.document.write('<link rel="stylesheet" href="style.css" type="text/css" />'); // Include any stylesheets here
        newWindow.document.write('</head><body >');
        newWindow.document.write(element.innerHTML);
        newWindow.document.write('</body></html>');
        newWindow.document.close();
        newWindow.print();
    }
</script>
  
</body>
</html>
