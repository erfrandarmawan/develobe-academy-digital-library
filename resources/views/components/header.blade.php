<nav {{ $attributes->merge(['class' => 'w-full flex flex-row items-center z-10']) }}>
  <!-- Logo Component: Start -->
  @include('components.logo')
  <!-- Logo Component: End -->

  <!-- Navigation Menu (Desktop): Start -->
  <ul class="hidden lg:flex flex-row ms-auto gap-10 items-center text-xl text-white">
    <li>
      <a href="/"
        class="hover:text-primary duration-200"
        title="Klik untuk membuka halaman awal">
        Beranda
      </a>
    </li>
    <li>
      <a href="/books"
        class="hover:text-primary duration-200"
        title="Klik untuk membuka halaman awal">
        Buku
      </a>
    </li>
    <li>
      <a href="/categories"
        class="hover:text-primary duration-200"
        title="Klik untuk membuka halaman awal">
        Kategori
      </a>
    </li>
    <li>
      <a href="/login"
        class="bg-primary text-white rounded-lg hover:bg-white hover:text-primary duration-200 py-2 px-4"
        title="Klik untuk membuka halaman awal">
        Masuk
      </a>
    </li>
  </ul>
  <!-- Navigation Menu (Desktop): End -->

  <!-- Navigation Icon (Mobile): Start -->
  <button class="inline lg:hidden ms-auto group"
    onclick="showMenu(true)">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" class="stroke-white group-hover:stroke-primary duration-200" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5h16M4 12h16M4 19h16"/></svg>
  </button>
  <!-- Navigation Icon (Mobile): End -->
</nav>