<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ">
    <div class="md:mx-auto md:w-full md:max-w-md border py-3 rounded-lg shadow-md mt-6">
      <div class="flex justify-center py-5">
        <img src="img/logo.png" alt="" width="100px" >
      </div>
      
      <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Silahkan Login</h2>
      <p class="text-center italic font-semibold">"Sistem Digital Score Silat Tradisional di Sumatera Barat"</p>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
        <form class="space-y-6 " action="{{ route('masuk') }}" method="POST" >
          @csrf
          <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
              <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            </div>
          </div>
    
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password <span class="text-gray-400 font-normal">min: 8 huruf</span></label> 
              <div class="text-sm">
                
              </div>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            </div>
          </div>
    
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Sign in</button>
          </div>
        </form>
    
        <br>

      </div>
    </div>
  
  
  </div>
  
</body>
</html>

    
 