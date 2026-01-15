<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Digital Library') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full flex flex-col p-10">
      <!-- Header Component: Start -->
      @include('components/header')
      <!-- Header Component: End -->

      <!-- Hero Section: Start -->
      <section id="section-hero"
        class="absolute top-0 left-0 flex items-center justify-center w-full h-screen">
        <div class="w-full h-full absolute top-0 left-0">
          <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-full h-full"/>
          <div class="top-0 left-0 bg-black/50 w-full h-full absolute"></div>
        </div>

        <div class="w-1/2 flex flex-col gap-5 text-white z-10 items-center text-center">
          <h1 class="font-bold text-4xl">
            READ ANYWHERE. ANYTIME
          </h1>
          <p class="text-xl">
            Perpustakaan digital modern yang dirancang untuk memberikan akses instan ke ribuan buku, jurnal dan sumber belajar - kapan saja, di mana saja
          </p>
          <a href="/register"
            class="font-bold px-4 py-2 text-xl text-white bg-primary rounded-lg hover:bg-white hover:text-primary duration-200"
            title="Klik untuk melakukan pendaftaran">
            DAFTAR SEKARANG
          </a>
        </div>
      </section>
      <!-- Hero Section: End -->
    </body>
</html>