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
                    <div class="flex justify-center" id="l_timer">
                        <h1 class="text-9xl mt-32" id="countdown">00.00</h1>
                     
                        
                    </div>
                    <div class="flex justify-end">
                        <button id="startButton" class="px-2 mx-2 py-1 rounded-md bg-blue-300">Start</button>
                        <button id="pauseButton" disabled class="px-2 mx-2 py-1 rounded-md bg-red-300">Pause</button>
                    </div>
                </div>

                
                
            </div>

            <div class="flex m-10 pt-10 justify-around">
                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 1 </h1>
                    <p class="text-5xl font-bold ">
                        
                        {{ $juri1[0]['total'] ?? 'Skor' }}
                        </p>
                    <p>Datuak Bagindo Ali</p>
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 2 </h1>
                    <p class="text-5xl font-bold ">{{ $juri2[0]['total'] ?? 'Skor' }}</p>
                    <p>Datuak Bagindo Ali</p>
                </div>

                <div class="border rounded-md bg-blue-300 p-3 text-center space-y-3">
                    <h1 class="">Juri 3 </h1>
                    <p class="text-5xl font-bold ">{{ $juri3[0]['total'] ?? 'Skor' }}</p>
                    <p>Datuak Bagindo Ali</p>
                </div>
            </div>
        </div>

      
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set the countdown time (10 minutes = 600 seconds)
            var countdownTime = 1 * 60;
            var countdownElement = document.getElementById('countdown');
            var pauseButton = document.getElementById('pauseButton');
            var startButton = document.getElementById('startButton');
            var isPaused = false;
            var isStarted = false;
            var countdownInterval;

            function updateCountdownDisplay() {
                var minutes = Math.floor(countdownTime / 60);
                var seconds = countdownTime % 60;
                countdownElement.innerHTML = minutes + "m " + seconds + "s ";
            }

            function startCountdown() {
                countdownInterval = setInterval(function() {
                    if (!isPaused) {
                        // Calculate minutes and seconds
                        var minutes = Math.floor(countdownTime / 60);
                        var seconds = countdownTime % 60;

                        // Display the result in the element with id="countdown"
                        countdownElement.innerHTML = minutes + "m " + seconds + "s ";

                        // If the countdown is over, clear the interval
                        if (countdownTime <= 0) {
                            clearInterval(countdownInterval);
                            countdownElement.innerHTML = "SELESAI";
                            location.reload();

                        } else {
                            countdownTime--;
                        }
                    }
                }, 1000);
            }

            pauseButton.addEventListener('click', function() {
                if (isStarted) {
                    if (isPaused) {
                        isPaused = false;
                        pauseButton.innerHTML = "Pause";
                    } else {
                        isPaused = true;
                        pauseButton.innerHTML = "Resume";
                    }
                }
            });

            startButton.addEventListener('click', function() {
                if (!isStarted) {
                    isStarted = true;
                    startButton.disabled = true;
                    pauseButton.disabled = false;
                    startCountdown();
                }
            });

            // Initialize display
            updateCountdownDisplay();
        });
    </script>
</body>
</html>