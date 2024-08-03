<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>
<body>

    <div class="relative h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://laravel.com/assets/img/welcome/background.svg');">
        </div>
        <!-- Overlay for darkening the background image -->
        <div class="absolute inset-0 "></div>
        <!-- Text on top of the background image -->
        <div class="relative z-10  h-full ">
           
            <p class="text-xl  font-semibold pt-10 text-center bg-blue"> <span class="px-2 py-1 bg-blue-300 bg-opacity-15">Liveskor Penjurian Silat Tradisional Sumatera Barat</span>  </p>
            <a href="/admin" class="bg-white bg-opacity-10 px-2 py-1 rounded-md ml-10" onclick="return confirm('Apakah anda yakin?')"><i class="fa-solid fa-arrow-left-long"></i> Kembali ke Admin</a>
            <div class="m-10 flex">
                
                <div class="basis-1/4">
                    <p>Nama Peserta : {{ $peserta->nama }}</p>
                    <p>Golongan : {{ $peserta->golongan }}</p>
                    <p>Kode pertandingan : {{ $peserta->id }}</p>
                </div>
                <div class="basis-2/4 flex flex-col justify-center  ">
                    <div class="flex justify-center mt-20">
                        <label class="px-2 mx-2 py-1 rounded-md">
                            <input type="radio" name="timeOption" value="180"> 3 Menit
                        </label>
                        <label class="px-2 mx-2 py-1 rounded-md">
                            <input type="radio" name="timeOption" value="300"> 5 Menit
                        </label>
                        <label class="px-2 mx-2 py-1 rounded-md">
                            <input type="radio" name="timeOption" value="600"> 10 Menit
                        </label>
                    </div>


                    <div class="flex justify-center" id="l_timer">
                        <h1 class="text-9xl mt-5" id="countdown">00:00</h1>
                    </div>
                    <div class="flex justify-end my-4">
                        <button id="startButton" class="px-2 mx-2 py-1 rounded-md bg-blue-300">Start</button>
                        <button id="pauseButton" disabled class="px-2 mx-2 py-1 rounded-md bg-red-300">Pause</button>
                    </div>
                </div>
                <div class="basis-1/4  p-4 pb-32 pr-32">
                    <div class="border p-3 rounded-md shadow-md bg-white ">
                        <p>Rata Rata</p>
                        <p class="text-5xl font-bold p-4">
                        
                            {{ $rata_rata ?? 'Rata-Rata' }}
                            </p>
                       

                    </div>
                </div>
            </div>
           
                
                
           

            <div class="flex m-10 pt-10 justify-around">
                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 1 </h1>
                    <p class="text-5xl font-bold p-4">
                        
                        {{ $juri1['total'] ?? 'Skor' }}
                        </p>
                   
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 2 </h1>
                    <p class="text-5xl font-bold p-4">{{ $juri2['total'] ?? 'Skor' }}</p>
                    
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 3 </h1>
                    <p class="text-5xl font-bold p-4">{{ $juri3['total'] ?? 'Skor' }}</p>
                   
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 4 </h1>
                    <p class="text-5xl font-bold p-4">{{ $juri4['total'] ?? 'Skor' }}</p>
                    
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 5 </h1>
                    <p class="text-5xl font-bold p-4">{{ $juri5['total'] ?? 'Skor' }}</p>
                    
                </div>
            </div>
        </div>

      
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var countdownTime;
            var countdownElement = document.getElementById('countdown');
            var pauseButton = document.getElementById('pauseButton');
            var startButton = document.getElementById('startButton');
            var timeOptions = document.getElementsByName('timeOption');
            var isPaused = false;
            var isStarted = false;
            var countdownInterval;
        
            function updateCountdownDisplay() {
                var minutes = Math.floor(countdownTime / 60);
                var seconds = countdownTime % 60;
                countdownElement.innerHTML = minutes.toString().padStart(2, '0') + ":" + seconds.toString().padStart(2, '0');
            }
        
            function startCountdown() {
                countdownInterval = setInterval(function() {
                    if (!isPaused) {
                        if (countdownTime <= 0) {
                            clearInterval(countdownInterval);
                            countdownElement.innerHTML = "SELESAI";
                            location.reload();
                        } else {
                            countdownTime--;
                            updateCountdownDisplay();
                        }
                    }
                }, 1000);
            }
        
            pauseButton.addEventListener('click', function() {
                if (isStarted) {
                    isPaused = !isPaused;
                    pauseButton.innerHTML = isPaused ? "Resume" : "Pause";
                }
            });
        
            startButton.addEventListener('click', function() {
                if (!isStarted) {
                    for (var option of timeOptions) {
                        if (option.checked) {
                            countdownTime = parseInt(option.value);
                            break;
                        }
                    }
                    if (countdownTime > 0) {
                        isStarted = true;
                        startButton.disabled = true;
                        pauseButton.disabled = false;
                        updateCountdownDisplay();
                        startCountdown();
                    }
                }
            });
        });
        </script>
        
</body>
</html>