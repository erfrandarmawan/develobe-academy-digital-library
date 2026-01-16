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
      <title>Kategori | {{ config('app.name', 'Digital Library') }}</title>
      <!-- Title: End -->

      <!-- Laravel Assets: Start -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Laravel Assets: End -->
    </head>
    <body class="w-full flex flex-col">
      <!-- Header Component: Start -->
      <x-header class="text-black px-5 lg:px-10 mt-5 lg:mt-10"></x-header>
      <!-- Header Component: End -->

      <!-- Category Section: Start -->
      <section id="category-section"
        class="w-full flex flex-col pt-5 lg:pt-10 pb-15 px-5 lg:px-10">

        <h2 class="font-bold text-2xl lg:text-4xl">
          Kategori Buku
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10 mt-5">
          @for ($i = 0; $i < 5; $i++)
          <x-category-item></x-category-item>
          @endfor
        </div>
      </section>
      <!-- Category Section: End -->

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