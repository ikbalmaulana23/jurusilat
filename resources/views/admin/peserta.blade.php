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
                <div class="flex flex-col flex-grow p-4 overflow-auto gap-3 text-black">
                   
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
                   
                      <div class="rounded-lg bg-white p-5"> 



                
                        <p class="text-center text-lg font-semibold">Rekap Peserta Lomba Silat Sumatera Barat</p>


                          
          <div class="flex gap-2">
            <a href="/admin/peserta" class="px-3 py-1 rounded-t-md bg-yellow-400 ">Tunggal</a>
            <a href="/admin/pasangan"  class="px-3 py-1 hover:bg-blue-300  rounded-t-md border ">Pasangan</a>
            <a href="/admin/regu"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Regu</a>
            <a href="/admin/ceritera"  class="px-3 py-1 rounded-t-md border hover:bg-blue-300">Ceritera</a>
          </div>

                        <table class="w-full text-sm text-left rtl:text-right">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tempat Lahir
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Lahir
                                    </th>
                            
                                    <th scope="col" class="px-6 py-3">
                                        Kelas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Asal Sekolah
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kategori Tanding
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Golongan
                                    </th>
                                
                                
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>


                            <tbody class="text-center">
                                @foreach ($peserta as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->nama }}</td>
                                        <td class="text-center">{{ $row->jen_kelamin }}</td>
                                        <td class="text-center">{{ $row->tpt_lahir }}</td>
                                        <td class="text-center">{{ $row->tgl_lahir }}</td>
                                     
                                        <td class="text-center">{{ $row->kelas }}</td>
                                        <td class="text-center">{{ $row->asal_sekolah }}</td>
                                        <td class="text-center">{{ $row->kategori_tanding }}</td>
                                        <td class="text-center">{{ $row->golongan }}</td>
                                      
                                 
                                        <td class="flex flex-col">
                                            <a href="/tampiledit/{{ $row->id }}"
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                                            <form action="{{ route('delete', $row->id) }}" method="post">
                                                @csrf
                                                <button
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- Component End  -->

</div>

<a class="fixed flex items-center justify-center h-8 pr-2 pl-1 bg-blue-600 rounded-full bottom-0 right-0 mr-4 mb-4 shadow-lg text-blue-100 hover:bg-blue-600" href="https://twitter.com/lofiui" target="_top">
	<div class="flex items-center justify-center h-6 w-6 bg-blue-500 rounded-full">
		<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
	</div>
	<span class="text-sm ml-1 leading-none">@lofiui</span>
</a>
<!-- partial -->
  
</body>
</html>
