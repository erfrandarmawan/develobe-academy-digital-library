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
        class="w-full h-[90vh] flex flex-row gap-10 items-center p-5 lg:px-10 lg:py-20">
        <!-- Side Menu: Start -->
        <x-panel-sidebar></x-panel-sidebar>
        <!-- Side Menu: End -->

        <!-- Panel Content: Start -->
        <main class="w-full h-full bg-white overflow-y-scroll rounded-lg drop-shadow-lg flex flex-col p-3 lg:p-5">
          <div class="flex flex-row">
            <h1 class="font-bold text-base lg:text-2xl">
              Semua Karya
            </h1>

            <a href="#"
              class="ms-auto border border-primary bg-primary text-white rounded-md lg:rounded-lg hover:bg-white hover:text-primary duration-200 py-1 lg:py-2 px-2 lg:px-4 font-bold text-xs lg:text-base"
              title="Klik untuk menambah karya">
              Tambah Data
            </a>
          </div>

          <div class="overflow-x-auto mt-3 lg:mt-5">
            <table class="min-w-max w-full h-full border border-gray-200 rounded-lg text-left text-xs lg:text-sm">
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