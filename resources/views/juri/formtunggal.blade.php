


<x-layout>

    <main class="">
        <div class="container md:mx-auto">
    
        <div class="w-1/2 mx-auto  mb-5 rounded-md shadow-md p-3">
            <h1 class="ml-28 font-semibold ">Data Peserta</h1>
            <div class="w-1/2  grid grid-cols-2">
                    {{-- @dd($pendaftar) --}}
                <p>Nama</p> <p>{{ $pendaftar->nama_peserta }}</p>
                <p>Kategori Tanding</p> <p>{{ $pendaftar->nama }}</p>
                <p>Golongan</p> <p>{{ $pendaftar->golongan }}</p>
                
            </div>
    
        </div>
          
    
            <div class="flex justify-center">
                <div class="basis-3/4 border rounded-md p-5">
                <div>
                    <h1 class="text-center font-semibold text-lg">Penilaian Lomba Tunggal</h1>
                    <h1 class="text-center font-semibold text-lg">Silat Tradisional Sumatera Barat</h1>
                </div>
                <form action="{{ route('skortunggal') }}" method="post">
                    @csrf
                    <div>
                        <input type="hidden" value="{{ $pendaftar->id }}" name="peserta_id">
                    </div>
                    <div>
                        <input type="hidden" value="{{ $pendaftar->id_registrasi }}" name="id_registrasi">
                    </div>
                    <div>
                        <input type="hidden" value="{{ Auth::guard('')->user()->id }}" name="id_juri">
                    </div>
                <div class="grid grid-cols-2 gap-7 mt-10">
                     
                   

                    <div class="border border-black p-3 rounded-md">
                        <p class="font-semibold">Keaslian Pencak Silat <span class="font-normal text-gray-500">(Max 25)</span> </p>
                    </div>  
                    <div class="border border-black p-3 rounded-md">
                        <input type="number" style="border: none"  class="w-full" name="orisinil">
                    </div>
    
                    <div class="border border-black p-3 rounded-md">
                        <p class="font-semibold">Kemantapan Gerak <span class="font-normal text-gray-500">(Max 25)</span></p>
                    </div>
                    <div class="border border-black p-3 rounded-md">
                        <input type="number" style="border: none" class="w-full" name="kekayaan_teknik">
                    </div>
                    
                    <div class="border border-black p-3 rounded-md">
                        <p class="font-semibold">Kekayaan Gerakan <span class="font-normal text-gray-500">(Max 25)</span></p>
                    </div>
                    <div class="border border-black p-3 rounded-md">
                        <input type="number" style="border: none" class="w-full" name="kemantapan_gerak">
                    </div>
                    <div class="border border-black p-3 rounded-md">
                        <p class="font-semibold">Penampilan <span class="font-normal text-gray-500">(Max 25)</span></p>
                    </div>
                    <div class="border border-black p-3 rounded-md">
                        <input type="number" style="border: none" class="w-full" name="penampilan">
                    </div>
                    
                   
    
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="bg-blue-500 px-20 mt-3 py-2 rounded-md text-white">Upload Skor</button>
                </div>
            </form>
    
    
    
            </div>
            </div>
        
    
          </div>
    
    </main>
</x-layout>