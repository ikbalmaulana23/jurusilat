<x-layout>



    <div class="border rounded-xl p-5 pb-20 lg:pb-20 ">

        <p class="text-center mt-10 mb-10 text-bold text-2xl font-semibold uppercase">Pendaftaran Form Peserta</p>

        <form class="max-w-4xl mx-auto grid md:grid-cols-3 gap-5" action="{{ route('page.show') }}" method="GET">
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Pilih Kategori</label>
                <select class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="option" onchange="this.form.submit()">
                    <option value="" selected disabled>Pilih Kategori</option>
                    <option value="tunggal" {{ request('option') == 'tunggal' ? 'selected' : '' }}>Kategori Tunggal</option>
                    <option value="pasangan" {{ request('option') == 'pasangan' ? 'selected' : '' }}>Kategori Pasangan</option>
                    <option value="regu" {{ request('option') == 'regu' ? 'selected' : '' }}>Kategori Regu</option>
                    <option value="ceritera" {{ request('option') == 'ceritera' ? 'selected' : '' }}>Kategori Ceritera</option>
                </select>
            </div>
        </form>

        <div class="mt-5">
            {{-- form untuk tunggal --}}
            @if($selectedOption == 'tunggal')
            <form class="max-w-4xl mx-auto grid grid-cols-3 gap-5" action="{{ route('daftarpeserta') }}" method="post"
            enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="peserta[0][kategori]" id="" value="1">
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="peserta[0][nama]" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('peserta.0.nama')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="jen_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>

                            <select id="jen_kelamin" name="peserta[0][jen_kelamin]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('peserta.0.jen_kelamin')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tpt_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                            Lahir</label>
                        <input type="text" name="peserta[0][tpt_lahir]" id="tpt_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.tpt_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Lahir</label>
                        <input type="date" name="peserta[0][tgl_lahir]" id="tgl_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.tgl_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>


                    <div class="mb-5">
                        <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi
                            Badan(cm)</label>
                        <input type="number" name="peserta[0][tb]" id="tb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.tb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan
                            (kg)</label>
                        <input type="number" name="peserta[0][bb]" id="bb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.bb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" name="peserta[0][kelas]" id="kelas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.kelas')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                            Sekolah</label>
                        <input type="text" name="peserta[0][asal_sekolah]" id="asal_sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.asal_sekolah')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    {{-- <div class="mb-5">
                        <label for="kategori_tanding"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tanding</label>
                        <input type="text" name="kategori_tanding" id="kategori_tanding"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <span>{{ $errors->first('kategori_tanding') }}</span>
                    </div> --}}


                    <div class="mb-5">
                        <label for="golongan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
                        <input type="text" name="peserta[0][golongan]" id="golongan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.golongan')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kode_gr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                            GR</label>
                        <input type="text" name="peserta[0][kode_gr]" id="kode_gr"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.kode_gr')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas_tanding_FK"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Tanding FK</label>
                        <input type="text" name="peserta[0][kelas_tanding_FK]" id="kelas_tanding_FK"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.kelas_tanding_FK')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kontingen"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontingen</label>
                        <input type="text" name="peserta[0][kontingen]" id="kontingen"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.kontingen')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="foto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                        <input type="file" name="peserta[0][foto]" id="foto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.foto')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                        <input type="file" name="peserta[0][ktp]" id="ktp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                    <div class="mb-5">
                        <label for="akta_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akta
                            Lahir</label>
                        <input type="file" name="peserta[0][akta_lahir]" id="akta_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.0.akta_lahir')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ijazah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ijazah</label>
                        <input type="file" name="peserta[0][ijazah]" id="ijazah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                </div>

                <div class="flex justify-center my-7">
                    <button type="submit"
                        class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><span
                            class="mx-10">Submit</span></button>
                </div>
            </form>
            @endif


            {{-- form untuk pasangan  --}}
            @if($selectedOption == 'pasangan')
            <form class="max-w-4xl mx-auto grid lg:grid-cols-2 gap-5" action="{{ route('daftarpesertapasangan') }}" method="post"
            enctype="multipart/form-data">
                @csrf
                <div class="border rounded-lg p-3">
                    <p class="text-lg font-semibold mb-3 uppercase">Peserta 1</p>
                    <input type="hidden" name="peserta[2][kategori]" id="" value="2">
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="peserta[2][nama]" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('peserta.2.nama')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="jen_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>

                            <select id="jen_kelamin" name="peserta[2][jen_kelamin]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('peserta.2.jen_kelamin')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tpt_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                            Lahir</label>
                        <input type="text" name="peserta[2][tpt_lahir]" id="tpt_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.tpt_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Lahir</label>
                        <input type="date" name="peserta[2][tgl_lahir]" id="tgl_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.tgl_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>


                    <div class="mb-5">
                        <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi
                            Badan(cm)</label>
                        <input type="number" name="peserta[2][tb]" id="tb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.tb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan
                            (kg)</label>
                        <input type="number" name="peserta[2][bb]" id="bb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.bb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" name="peserta[2][kelas]" id="kelas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.kelas')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                            Sekolah</label>
                        <input type="text" name="peserta[2][asal_sekolah]" id="asal_sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.asal_sekolah')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    {{-- <div class="mb-5">
                        <label for="kategori_tanding"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tanding</label>
                        <input type="text" name="kategori_tanding" id="kategori_tanding"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <span>{{ $errors->first('kategori_tanding') }}</span>
                    </div> --}}


                    <div class="mb-5">
                        <label for="golongan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
                        <input type="text" name="peserta[2][golongan]" id="golongan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.golongan')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kode_gr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                            GR</label>
                        <input type="text" name="peserta[2][kode_gr]" id="kode_gr"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.kode_gr')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas_tanding_FK"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Tanding FK</label>
                        <input type="text" name="peserta[2][kelas_tanding_FK]" id="kelas_tanding_FK"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.kelas_tanding_FK')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kontingen"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontingen</label>
                        <input type="text" name="peserta[2][kontingen]" id="kontingen"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.kontingen')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="foto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                        <input type="file" name="peserta[2][foto]" id="foto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.foto')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                        <input type="file" name="peserta[2][ktp]" id="ktp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                    <div class="mb-5">
                        <label for="akta_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akta
                            Lahir</label>
                        <input type="file" name="peserta[2][akta_lahir]" id="akta_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.2.akta_lahir')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ijazah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ijazah</label>
                        <input type="file" name="peserta[2][ijazah]" id="ijazah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                </div>

                <div class="border rounded-lg p-3">
                    <p class="text-lg font-semibold mb-3 uppercase">Peserta 2</p>
                    <input type="hidden" name="peserta[1][kategori]" id="" value="2">
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="peserta[1][nama]" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('peserta.1.nama')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="jen_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>

                            <select id="jen_kelamin" name="peserta[1][jen_kelamin]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('peserta.1.jen_kelamin')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tpt_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                            Lahir</label>
                        <input type="text" name="peserta[1][tpt_lahir]" id="tpt_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.tpt_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="mb-5">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Lahir</label>
                        <input type="date" name="peserta[1][tgl_lahir]" id="tgl_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.tgl_lahir')
                            <div>{{ $message }}</div>
                            @enderror

                    </div>


                    <div class="mb-5">
                        <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi
                            Badan(cm)</label>
                        <input type="number" name="peserta[1][tb]" id="tb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.tb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan
                            (kg)</label>
                        <input type="number" name="peserta[1][bb]" id="bb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.bb')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" name="peserta[1][kelas]" id="kelas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.kelas')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                            Sekolah</label>
                        <input type="text" name="peserta[1][asal_sekolah]" id="asal_sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.asal_sekolah')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    {{-- <div class="mb-5">
                        <label for="kategori_tanding"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tanding</label>
                        <input type="text" name="kategori_tanding" id="kategori_tanding"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <span>{{ $errors->first('kategori_tanding') }}</span>
                    </div> --}}


                    <div class="mb-5">
                        <label for="golongan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
                        <input type="text" name="peserta[1][golongan]" id="golongan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.golongan')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kode_gr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                            GR</label>
                        <input type="text" name="peserta[1][kode_gr]" id="kode_gr"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.kode_gr')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kelas_tanding_FK"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas Tanding FK</label>
                        <input type="text" name="peserta[1][kelas_tanding_FK]" id="kelas_tanding_FK"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.kelas_tanding_FK')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="kontingen"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontingen</label>
                        <input type="text" name="peserta[1][kontingen]" id="kontingen"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.kontingen')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="mb-5">
                        <label for="foto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                        <input type="file" name="peserta[1][foto]" id="foto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.foto')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                        <input type="file" name="peserta[1][ktp]" id="ktp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                    <div class="mb-5">
                        <label for="akta_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akta
                            Lahir</label>
                        <input type="file" name="peserta[1][akta_lahir]" id="akta_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('peserta.1.akta_lahir')
                            <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-5">
                        <label for="ijazah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ijazah</label>
                        <input type="file" name="peserta[1][ijazah]" id="ijazah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    </div>

                </div>



                </div>
                <div class="flex justify-center my-7">
                    <button type="submit"
                        class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><span
                            class="mx-10">Submit</span></button>
                </div>

            </form>

            @endif


            {{-- form untuk regu --}}
            @if($selectedOption == 'regu')
            <p>Konten untuk Opsi 3</p>
            <!-- Tambahkan konten lain untuk Opsi 1 -->
            @endif


            {{-- form ceritera --}}
            @if($selectedOption == 'ceritera')
            <p>Konten untuk Opsi 4</p>
            <!-- Tambahkan konten lain untuk Opsi 1 -->
            @endif
        </div>




    </div>

</x-layout>



