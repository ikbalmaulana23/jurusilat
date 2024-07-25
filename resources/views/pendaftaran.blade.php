<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>

    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="">

    <p class="text-center mt-10 mb-10 text-bold text-2xl">Pendaftaran Form Peserta</p>
    <form class="max-w-4xl mx-auto grid grid-cols-3 gap-5" action="{{ route('daftarpeserta') }}" method="post" enctype="multipart/form-data">
@csrf

        <div class="mb-5">
          <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
          <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
          <span>{{ $errors->first('nama') }}</span>
        </div>

        <div class="mb-5">
            <label for="jen_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
            <input type="text" name="jen_kelamin" id="jen_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('jen_kelamin') }}</span>
        {{-- <select name="jen_kelamin" id="jen_kelamin" >
            <option value="laki-laki">Laki Laki</option>
            <option value="perempuan">Perempuan</option>
        </select> --}}
        </div>

        <div class="mb-5">
            <label for="tpt_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
            <input type="text" name="tpt_lahir" id="tpt_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('tpt_lahir') }}</span>
          </div>

          <div class="mb-5">
            <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('tgl_lahir') }}</span>
          </div>

          
        <div class="mb-5">
            <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi Badan(m)</label>
            <input type="text" name="tb" id="tb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('tb') }}</span>
          </div>

          
        <div class="mb-5">
            <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan (kg)</label>
            <input type="text" name="bb" id="bb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('bb') }}</span>
          </div>

          <div class="mb-5">
            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('kelas') }}</span>
          </div>

          
        <div class="mb-5">
            <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('asal_sekolah') }}</span>
          </div>

          <div class="mb-5">
            <label for="kategori_tanding" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tanding</label>
            <input type="text" name="kategori_tanding" id="kategori_tanding" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('kategori_tanding') }}</span>
          </div>

          
        <div class="mb-5">
            <label for="golongan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
            <input type="text" name="golongan" id="golongan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('golongan') }}</span>
          </div>

          <div class="mb-5">
            <label for="kode_gr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode GR</label>
            <input type="text" name="kode_gr" id="kode_gr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('kode_gr') }}</span>
          </div>

          <div class="mb-5">
            <label for="kelas_tanding_FK" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Tanding FK</label>
            <input type="text" name="kelas_tanding_FK" id="kode_gr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('kelas_tanding_FK') }}</span>
          </div>

          <div class="mb-5">
            <label for="kontingen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontingen</label>
            <input type="text" name="kontingen" id="kode_gr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('kontingen') }}</span>
          </div>

          
        <div class="mb-5">
            <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
            <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('foto') }}</span>
          </div>

          <div class="mb-5">
            <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
            <input type="file" name="ktp" id="ktp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('ktp') }}</span>
          </div>

          <div class="mb-5">
            <label for="akta_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akta Lahir</label>
            <input type="file" name="akta_lahir" id="akta_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('akta_lahir') }}</span>
          </div>

          <div class="mb-5">
            <label for="ijazah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ijazah</label>
            <input type="file" name="ijazah" id="ijazah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
            <span>{{ $errors->first('ijazah') }}</span>
          </div>
     
     
      
        </div>
        <div class="flex justify-center ">
          <button type="submit" class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><span class="mx-10">Submit</span></button>
      
      </form>
      

  </div>
    

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>