<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>

    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ optional(auth()->user())->name
           ?? ''}}</span>
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
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
            <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Skor</a>
              </li>
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

<main class="">
    <div class="container md:mx-auto">

       <div class="">
        <h1 class="text-center">Inpur Skor Perlombaan Silat Tradisional</h1>
        <h1 class="text-center">Sumatra Barat</h1>  
       </div>

    <div class="border">
        <h1 class="ml-28 font-semibold ">Data Peserta</h1>
        <div class="w-1/4 border grid grid-cols-2">

            <p>Nama</p> <p>Ikbal Maulana    </p>
            <p>Kategori Tanding</p> <p>Tunggal</p>
            <p>Golongan</p> <p>Desawa</p>
            <p>Kode GR  </p> <p>B83</p>
            <p>Kelas Tanding</p> <p>Dewasa Ringan</p>
        </div>

    </div>
        <div class="flex">
            <h1>Juri</h1>
            <p>: Dt. Bagindo Ali</p>
        </div>

        <div class="flex justify-center">
            <div class="basis-3/4 border rounded-md p-5">
            <div>
                <h1 class="text-center font-semibold text-lg">Penilaian Lomba Tunggal</h1>
                <h1 class="text-center font-semibold text-lg">Silat Tradisional Sumatera Barat</h1>
            </div>
            <form action="">
            <div class="grid grid-cols-2 gap-7 mt-10">
                 

                <div class="border border-black p-3 rounded-md">
                    <p class="font-semibold">Keaslian Pencak Silat</p>
                </div>  
                <div class="border border-black p-3 rounded-md">
                    <input type="text" style="border: none"  class="w-full">
                </div>

                <div class="border border-black p-3 rounded-md">
                    <p class="font-semibold">Kemantapan Gerak</p>
                </div>
                <div class="border border-black p-3 rounded-md">
                    <input type="text" style="border: none" class="w-full">
                </div>
                <div class="border border-black p-3 rounded-md">
                    <p class="font-semibold">Kekayaan Gerakan</p>
                </div>
                <div class="border border-black p-3 rounded-md">
                    <input type="text" style="border: none" class="w-full">
                </div>
                <div class="border border-black p-3 rounded-md">
                    <p class="font-semibold">Penampilan </p>
                </div>
                <div class="border border-black p-3 rounded-md">
                    <input type="text" style="border: none" class="w-full">
                </div>
                <div>
                    <h1 class="text-white"> f</h1>
                </div>
                <div class="border border-black p-3 rounded-md flex">
                    <label for="total">Total</label>
                   <div></div>
                </div>

            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white">Upload Skor</button>
            </div>
        </form>



        </div>
        </div>
    

      </div>

</main>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>