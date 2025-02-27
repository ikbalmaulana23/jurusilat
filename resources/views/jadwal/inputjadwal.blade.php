<x-layout>

<div class="flex justify-center">
    <form class="basis-1/3" action="{{ route('inputjadwal') }}" method="post">
        @csrf
        <div class="space-y-12 ">
          <div class="border-b border-gray-900/10 pb-12 flex flex-col justify-end">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Input Jadwal Tanding</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Masukan input jadwal tanding peserta .</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ">
              <div class="sm:col-span-4">
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Peserta</label>
                    <select id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected disabled>Pilih Nama Peserta</option>
                        @foreach ($peserta as $data)
                        <option value="{{$data->nama}}">{{$data->nama}}</option>
                        @endforeach

                      </select>

                 
                    {{-- <select class="form-select" aria-label="Default select example" name="id_fakultas" id="fakultas">
                        <option value="" selected disabled>Pilih Nama Peserta</option>
                        @foreach ($peserta as $data)
                        <option value="{{$data->id}}">{{$data->nama}}</option>
                        @endforeach
                    </select> --}}


                    {{-- <input type="text" name="nama" id="nama" autocomplete="username" class="w-full flex-1 border border-gray-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 " placeholder="Nama Peserta" > --}}
              </div>
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kontingen</label>
                <input type="text" name="kontingen" id="kontingen" autocomplete="username" class="w-full flex-1 border border-gray-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 " placeholder="Nama Peserta" >
          </div>
          <div class="sm:col-span-4">
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tangal/Hari</label>
            <input type="date" name="tanggal_hari" id="tanggal_hari" autocomplete="username" class="w-full flex-1 border border-gray-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 " placeholder="Nama Peserta" >
      </div>
      <div class="sm:col-span-4">
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
        <input type="text" name="status" id="status" autocomplete="username" class="w-full flex-1 border border-gray-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 " placeholder="Nama Peserta" >
  </div>





            </div>
            <button type="submit" class="p-2 bg-red-700 text-white rounded-lg mt-7"> Masukkan Jadwal</button>
          </div>


      </form>
</div>




</x-layout>
