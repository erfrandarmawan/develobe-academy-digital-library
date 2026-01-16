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
      <title>Buku | {{ config('app.name', 'Digital Library') }}</title>
      <!-- Title: End -->

      <!-- Laravel Assets: Start -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Laravel Assets: End -->
    </head>
    <body class="w-full flex flex-col">
      <!-- Header Component: Start -->
      <x-header class="text-black px-10 mt-10"></x-header>
      <!-- Header Component: End -->

      <!-- Search Filter: Start -->
      <form class="w-75 flex flex-row rounded-lg border p-2 gap-2 mt-10 mx-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m17 17l4 4m-2-10a8 8 0 1 0-16 0a8 8 0 0 0 16 0"/></svg>

        <input type="search"
          placeholder="Search book here..."
          class="w-full text-base font-light outline-none"/>
      </form>
      <!-- Search Filter: End -->

      <!-- Book Section: Start -->
      <section id="book-section"
        class="w-full flex flex-col pt-5 pb-15 px-10">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
          @for ($i = 0; $i < 10; $i++)
          <x-book-item></x-book-item>
          @endfor
        </div>
      </section>
      <!-- Book Section: End -->

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