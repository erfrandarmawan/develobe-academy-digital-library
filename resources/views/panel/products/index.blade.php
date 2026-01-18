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
      <title>Panel - Semua Karya | {{ config('app.name', 'Digital Library') }}</title>
      <!-- Title: End -->

      <!-- Laravel Assets: Start -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Laravel Assets: End -->
    </head>
    <body class="w-full flex flex-col">
      <!-- Header Component: Start -->
      <x-header class="text-black px-5 lg:px-10 mt-5 lg:mt-10"></x-header>
      <!-- Header Component: End -->

      <!-- Panel Section: Start -->
      <section id="panel-section"
        class="w-full h-[90vh] flex flex-row gap-10 items-center px-10 py-20">
        <!-- Side Menu: Start -->
        <aside class="w-3/12 min-w-3/12 bg-white px-5 py-10 rounded-lg drop-shadow-lg flex flex-col items-center">
          <!-- Avatar Image: Start -->
          <div class="w-30 h-30 border-4 border-primary rounded-full overflow-hidden p-2">
            <img src="https://images.unsplash.com/photo-1518495973542-4542c06a5843?q=80&w=100&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="w-full h-full object-cover rounded-full"
              alt="Avatar Pengguna"/>
          </div>
          <!-- Avatar Image: End -->

          <!-- User Name: Start -->
          <span class="font-bold uppercase text-xl mt-3">
            Erfran Darmawan
          </span>
          <!-- User Name: End -->

          <!-- Navigation: Start -->
          <ul class="w-full flex flex-col mt-5 gap-2 text-black font-bold text-sm">
            <li class="flex">
              <a href="#"
                class="{{ request()->path() === 'panel' ? 'text-white bg-primary' : 'hover:bg-gray-500/5 hover:text-primary' }} rounded-md w-full px-2.5 py-2 duration-200"
                title="Klik untuk membuka halaman 'Semua Karya'">
                Semua Karya
              </a>
            </li>
            <li class="flex">
              <a href="#"
                class="{{ request()->path() === 'panel/users' ? 'text-white bg-primary' : 'hover:bg-gray-500/5 hover:text-primary' }} rounded-md w-full px-2.5 py-2 duration-200"
                title="Klik untuk membuka halaman 'Manajemen Pengguna'">
                Manajemen Pengguna
              </a>
            </li>
            <li class="flex">
              <a href="#"
                class="{{ request()->path() === 'panel/settings' ? 'text-white bg-primary' : 'hover:bg-gray-500/5 hover:text-primary' }} rounded-md w-full px-2.5 py-2 duration-200"
                title="Klik untuk membuka halaman 'Pengaturan Data'">
                Pengaturan Data
              </a>
            </li>
            <li class="flex">
              <a href="#"
                class="{{ request()->path() === 'panel/change-password' ? 'text-white bg-primary' : 'hover:bg-gray-500/5 hover:text-primary' }} rounded-md w-full px-2.5 py-2 duration-200"
                title="Klik untuk membuka halaman 'Pengaturan Kata Sandi'">
                Pengaturan Kata Sandi
              </a>
            </li>
            <li class="flex">
              <a href="#"
                class="hover:bg-gray-500/5 hover:text-primary rounded-md w-full px-2.5 py-2 duration-200"
                title="Klik untuk keluar dari portal pengguna">
                Keluar
              </a>
            </li>
          </ul>
          <!-- Navigation: End -->
        </aside>
        <!-- Side Menu: End -->

        <!-- Panel Content: Start -->
        <main class="w-full h-full bg-white overflow-y-scroll rounded-lg drop-shadow-lg flex flex-col p-5">
          <div class="flex flex-row">
            <h1 class="font-bold text-2xl">
              Semua Karya
            </h1>

            <a href="#"
              class="ms-auto border border-primary bg-primary text-white rounded-lg hover:bg-white hover:text-primary duration-200 py-2 px-4 font-bold"
              title="Klik untuk menambah karya">
              Tambah Data
            </a>
          </div>

          <div class="overflow-x-auto mt-5">
            <table class="min-w-max w-full h-full border border-gray-200 rounded-lg text-left text-sm">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-3 py-2 w-50">Action</th>
                  <th class="px-3 py-2 w-40">Title</th>
                  <th class="px-3 py-2 w-40">Slug</th>
                  <th class="px-3 py-2 w-40">Category</th>
                  <th class="px-3 py-2 w-40">Status</th>
                  <th class="px-3 py-2 w-50">Approved At</th>
                  <th class="px-3 py-2 w-50">Created At</th>
                  <th class="px-3 py-2 w-40">Created By</th>
                </tr>
              </thead>

              <tbody>
                @for ($i = 0; $i < 20; $i++)
                <tr class="hover:bg-gray-50 duration-150">
                  <td class="px-3 py-2 flex flex-row gap-2">
                    <a href="#" class="border border-primary bg-primary text-white rounded-md hover:bg-white hover:text-primary duration-200 py-1 px-2">Edit</a>
                    <a href="#" class="border border-green-500 bg-green-500 text-white rounded-md hover:bg-white hover:text-green-500 duration-200 py-1 px-2">Approve</a>
                    <a href="#" class="border border-red-500 bg-red-500 text-white rounded-md hover:bg-white hover:text-red-500 duration-200 py-1 px-2">Reject</a>
                  </td>
                  <td class="px-3 py-2">
                    Judul Buku
                  </td>
                  <td class="px-3 py-2">
                    test-judul
                  </td>
                  <td class="px-3 py-2">
                    Edukasi
                  </td>
                  <td class="px-3 py-2">
                    <span @class([
                      'px-2 py-1 rounded text-xs font-semibold',
                      'bg-green-100 text-green-700'
                    ])>
                      Published
                    </span>
                  </td>
                  <td class="px-3 py-2">
                    18 Jan 2026 - 16:50 WIB
                  </td>
                  <td class="px-3 py-2">
                    18 Jan 2026 - 13:50 WIB
                  </td>
                  <td class="px-3 py-2">
                    ADMIN
                  </td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </main>
        <!-- Panel Content: End -->
      </section>
      <!-- Panel Section: End -->

      <!-- Footer Component: Start -->
      <x-footer></x-footer>
      <!-- Footer Component: End -->
    </body>
</html>