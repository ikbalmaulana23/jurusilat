


<x-layout>

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
                <form action="{{ route('skorregu') }}" method="post">
                    @csrf
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
</x-layout>