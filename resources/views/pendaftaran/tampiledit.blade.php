<x-layout>



    <div class="">

        <p class="text-center mt-10 mb-10 text-bold text-2xl">Edit Form Peserta</p>
        <form class="max-w-4xl mx-auto grid grid-cols-3 gap-5" action="/updatedata/{{ $data->id }}" method="post"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-5">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $data->nama }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('nama') }}</span>
            </div>

            <div class="mb-5">
                <label for="jen_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                    Kelamin</label>

                    <select id="jen_kelamin" name="jen_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled {{ $data->jen_kelamin == null ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki" {{ $data->jen_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ $data->jen_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>

                    {{-- <input type="text" name="jen_kelamin" id="jen_kelamin" value="{{ $data->jen_kelamin }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" /> --}}


                    <span>{{ $errors->first('jen_kelamin') }}</span>

            </div>

            <div class="mb-5">
                <label for="tpt_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                    Lahir</label>
                <input type="text" name="tpt_lahir" id="tpt_lahir" value="{{ $data->tpt_lahir }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('tpt_lahir') }}</span>
            </div>

            <div class="mb-5">
                <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $data->tgl_lahir }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('tgl_lahir') }}</span>
            </div>


            <div class="mb-5">
                <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi
                    Badan(m)</label>
                <input type="text" name="tb" id="tb" value="{{ $data->tb }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('tb') }}</span>
            </div>


            <div class="mb-5">
                <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan
                    (kg)</label>
                <input type="text" name="bb" id="bb" value="{{ $data->bb }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('bb') }}</span>
            </div>

            <div class="mb-5">
                <label for="kelas"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <input type="text" name="kelas" id="kelas" value="{{ $data->kelas }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('kelas') }}</span>
            </div>


            <div class="mb-5">
                <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                    Sekolah</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $data->asal_sekolah }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('asal_sekolah') }}</span>
            </div>

            <div class="mb-5">
                <label for="kategori_tanding"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tanding</label>
                <input type="text" name="kategori_tanding" id="kategori_tanding"
                    value="{{ $data->kategori_tanding }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('kategori_tanding') }}</span>
            </div>


            <div class="mb-5">
                <label for="golongan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
                <input type="text" name="golongan" id="golongan" value="{{ $data->golongan }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('golongan') }}</span>
            </div>

            <div class="mb-5">
                <label for="kode_gr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                    GR</label>
                <input type="text" name="kode_gr" id="kode_gr" value="{{ $data->kode_gr }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('kode_gr') }}</span>
            </div>

            <div class="mb-5">
                <label for="kelas_tanding_FK"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Tanding FK</label>
                <input type="text" name="kelas_tanding_FK" id="kode_gr" value="{{ $data->kelas_tanding_FK }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('kelas_tanding_FK') }}</span>
            </div>

            <div class="mb-5">
                <label for="kontingen"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontingen</label>
                <input type="text" name="kontingen" id="kode_gr" value="{{ $data->kontingen }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('kontingen') }}</span>
            </div>


            <div class="mb-5">
                <label for="foto"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                <input type="file" name="foto" id="foto"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('foto') }}</span>
            </div>

            <div class="mb-5">
                <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                <input type="file" name="ktp" id="ktp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('ktp') }}</span>
            </div>

            <div class="mb-5">
                <label for="akta_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akta
                    Lahir</label>
                <input type="file" name="akta_lahir" id="akta_lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('akta_lahir') }}</span>
            </div>

            <div class="mb-5">
                <label for="ijazah"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ijazah</label>
                <input type="file" name="ijazah" id="ijazah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span>{{ $errors->first('ijazah') }}</span>
            </div>



    </div>
    <div class="flex justify-center ">
        <button type="submit"
            class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><span
                class="mx-10">Edit</span></button>
    </div>
    </form>
    </div>

</x-layout>
