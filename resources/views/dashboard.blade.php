<x-layout>

<body>


    <p class="text-center  text-bold text-2xl">Data Peserta</p>
    <div class="">
        <div class="ms-5 mb-4">
            <a href="/pendaftaran" type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                data</a>
        </div>
        {{-- @dd($peserta) --}}
        <div class="relative overflow-x-auto">
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
                            Tinggi Badan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berat Badan
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
                            Kode GR
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kelas Tanding FK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kontingen
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto KTP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto Akta Kelahiran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto Ijazah
                        </th> --}}
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
                            <td class="text-center">{{ $row->tb }}</td>
                            <td class="text-center">{{ $row->bb }}</td>
                            <td class="text-center">{{ $row->kelas }}</td>
                            <td class="text-center">{{ $row->asal_sekolah }}</td>
                            <td class="text-center">{{ $row->kategori_tanding }}</td>
                            <td class="text-center">{{ $row->golongan }}</td>
                            <td class="text-center">{{ $row->kode_gr }}</td>
                            <td class="text-center">{{ $row->kelas_tanding_FK }}</td>
                            <td class="text-center">{{ $row->kontingen }}</td>
                            {{-- <td>
                                <img src="{{ asset('image/' . $row->foto) }}" alt="" width="80px">
                            </td>
                            <td>
                                <img src="{{ asset('image/' . $row->ktp) }}" alt="" width="80px">
                            </td>
                            <td>
                                <img src="{{ asset('image/' . $row->akta_lahir) }}" alt="" width="80px">
                            </td>
                            <td>
                                <img src="{{ asset('image/' . $row->ijazah) }}" alt="" width="80px">
                            </td> --}}
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


</x-layout>
