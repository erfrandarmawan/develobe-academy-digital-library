<!DOCTYPE html>
<html>
    <head>
      <!-- Meta Tag - Encoding Character Information: Start -->
      <meta charset="utf-8">
      <!-- Meta Tag - Encoding Character Information: Start -->

      <!-- Meta Tag - Support Responsive Layout: Start -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Meta Tag - Support Responsive Layout: End -->

      <!-- Title: Start -->
      <title>Detail Buku | {{ config('app.name', 'Digital Library') }}</title>
      <!-- Title: End -->

      <!-- Laravel Assets: Start -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Laravel Assets: End -->
    </head>
    <body class="w-full flex flex-col">
      <!-- Header Component: Start -->
      <x-header class="text-black px-5 lg:px-10 mt-5 lg:mt-10"></x-header>
      <!-- Header Component: End -->

      <!-- Book Details Section: Start -->
      <section id="book-details-section"
        class="w-full flex flex-row pt-5 pb-15 px-5 lg:px-10 gap-10 mt-10">
        <div class="w-90 min-w-90 h-fit rounded-3xl overflow-hidden bg-slate-500">
          <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-full h-full object-contain hover:scale-110 duration-200"
            alt="Cover buku"/>
        </div>

        <div class="w-full flex flex-col">
          <!-- Book Title: Start -->
          <h1 class="font-bold text-4xl">
            Judul Buku
          </h1>
          <!-- Book Title: End -->

          <!-- Book Information: Start -->
          <div class="flex flex-col gap-2 mt-2">
            <!-- Date Information: Start -->
            <div class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 lg:w-6 lg:h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M8 13.885q-.31 0-.54-.23t-.23-.54t.23-.539t.54-.23t.54.23t.23.54t-.23.539t-.54.23m4 0q-.31 0-.54-.23t-.23-.54t.23-.539t.54-.23t.54.23t.23.54t-.23.539t-.54.23m4 0q-.31 0-.54-.23t-.23-.54t.23-.539t.54-.23t.54.23t.23.54t-.23.539t-.54.23M5.616 21q-.691 0-1.153-.462T4 19.385V6.615q0-.69.463-1.152T5.616 5h1.769V2.77h1.077V5h7.154V2.77h1V5h1.769q.69 0 1.153.463T20 6.616v12.769q0 .69-.462 1.153T18.384 21zm0-1h12.769q.23 0 .423-.192t.192-.424v-8.768H5v8.769q0 .23.192.423t.423.192M5 9.615h14v-3q0-.23-.192-.423T18.384 6H5.616q-.231 0-.424.192T5 6.616zm0 0V6z"/></svg>
              <span class="text-sm lg:text-base">
                2 June 2025
              </span>
            </div>
            <!-- Date Information: End -->

            <!-- Author: Start -->
            <div class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 lg:w-6 lg:h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M10.8 19.916q1.106-1.949 2.789-2.682Q15.27 16.5 16.5 16.5q.517 0 .98.071q.464.071.912.202q.658-.854 1.133-2.098T20 12q0-3.35-2.325-5.675T12 4T6.325 6.325T4 12q0 1.298.384 2.448q.383 1.15 1.035 2.102q.948-.558 1.904-.804t2.004-.246q.627 0 1.22.099q.594.099.972.209q-.286.184-.52.373q-.233.188-.472.427q-.185-.05-.532-.08q-.347-.028-.668-.028q-.858 0-1.703.214q-.845.213-1.57.64q.935 1.05 2.162 1.693q1.228.643 2.584.868M12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M9.5 13q-1.258 0-2.129-.871T6.5 10t.871-2.129T9.5 7t2.129.871T12.5 10t-.871 2.129T9.5 13m0-1q.817 0 1.409-.591q.591-.592.591-1.409t-.591-1.409Q10.317 8 9.5 8t-1.409.591Q7.5 9.183 7.5 10t.591 1.409Q8.683 12 9.5 12m7 2.385q-1.001 0-1.693-.692T14.116 12t.691-1.693t1.693-.691t1.693.691t.691 1.693t-.691 1.693t-1.693.692M12 12"/></svg>
              <span class="text-sm lg:text-base">
                Erfran Darmawan
              </span>
            </div>
            <!-- Author: End -->

            <!-- Total Views: Start -->
            <div class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 lg:w-6 lg:h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M16.808 19q-.344 0-.576-.232T16 18.192V15q0-.343.232-.575t.576-.233h1.384q.344 0 .576.232T19 15v3.192q0 .344-.232.576t-.576.232zm-5.5 0q-.344 0-.576-.232t-.232-.576V5.808q0-.343.232-.576T11.308 5h1.384q.344 0 .576.232t.232.576v12.384q0 .344-.232.576t-.576.232zm-5.5 0q-.344 0-.576-.232T5 18.192v-7.567q0-.358.232-.587t.576-.23h1.384q.343 0 .576.232t.232.576v7.567q0 .358-.232.587t-.576.23z"/></svg>
              <span class="text-sm lg:text-base">
                12.912
              </span>
            </div>
            <!-- Total Views: End -->
          </div>
          <!-- Book Information: End -->

          <hr class="my-5" />

          <p class="text-base">
            Deskripsi Buku di sini. HTML adalah fondasi utama dari setiap halaman web di dunia. Tanpa HTML, tidak ada teks, gambar, tautan, atau struktur yang dapat ditampilkan di browser. Namun, bagi banyak pemula, mempelajari HTML sering kali terasa membingungkan karena istilah teknis dan sintaks yang terlihat rumit. Buku ini hadir untuk menjembatani kesenjangan itu. Dengan penjelasan langkah demi langkah, ilustrasi visual, dan contoh kode yang relevan, Anda akan memahami bagaimana sebuah halaman web dibangun dari nol — bahkan tanpa pengalaman pemrograman sekalipun.
          </p>

          <a href="#"
            class="w-fit mt-5 font-bold uppercase border border-primary bg-primary text-white rounded-lg hover:bg-white hover:text-primary duration-200 py-2 px-4"
            title="Klik untuk membuka halaman awal">
            Baca Online
          </a>
        </div>
      </section>
      <!-- Book Details Section: End -->

      <!-- Footer Component: Start -->
      <x-footer></x-footer>
      <!-- Footer Component: End -->

      <script>
        function showMenu(isVisible){
          const mobileNavElement = document.getElementById("mobile-nav-layout");
          if (isVisible){
            mobileNavElement.classList.remove("hidden");
          } else {
            mobileNavElement.classList.add("hidden");
          }
        }
      </script>
    </body>
</html>