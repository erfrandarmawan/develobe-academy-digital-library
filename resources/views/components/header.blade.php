@props(['isLightColor' => false])

<nav {{ $attributes->merge(['class' => 'w-full flex flex-row items-center z-10']) }}>
  <!-- Logo Component: Start -->
  @include('components.logo')
  <!-- Logo Component: End -->

  <!-- Navigation Menu (Desktop): Start -->
  <ul class="hidden lg:flex flex-row ms-auto gap-10 items-center text-xl font-medium">
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
        title="Klik untuk membuka halaman buku">
        Buku
      </a>
    </li>
    <li>
      <a href="/categories"
        class="hover:text-primary duration-200"
        title="Klik untuk membuka halaman kategori">
        Kategori
      </a>
    </li>
    <li>
      @if (request()->path() === 'login')
      <a href="/register"
        class="border border-primary bg-primary text-white rounded-lg hover:bg-white hover:text-primary duration-200 py-2 px-4"
        title="Klik untuk membuat akun baru">
        Daftar
      </a>
      @else
      <a href="/login"
        class="border border-primary bg-primary text-white rounded-lg hover:bg-white hover:text-primary duration-200 py-2 px-4"
        title="Klik untuk masuk ke portal pengguna">
        Masuk
      </a>
      @endif
    </li>
  </ul>
  <!-- Navigation Menu (Desktop): End -->

  <!-- Navigation Icon (Mobile): Start -->
  <button class="inline lg:hidden ms-auto group w-10 h-10 p-1"
    onclick="showMenu(true)">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 24 24"><path fill="none" {{ $attributes->merge(['class' => $isLightColor ? 'stroke-white group-hover:stroke-primary duration-200' : 'stroke-black group-hover:stroke-primary duration-200']) }} stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5h16M4 12h16M4 19h16"/></svg>
  </button>
  <!-- Navigation Icon (Mobile): End -->
</nav>

<!-- Mobile Navigation Layout: Start -->
<div id="mobile-nav-layout"
  class="hidden w-full h-full fixed top-0 left-0 bg-white z-50 p-5">
  <div class="flex flex-col">
    <button class="ms-auto w-10 h-10 p-1"
      onclick="showMenu(false)">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 24 24"><path class="fill-red-500" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z"/></svg>
    </button>

    <ul class="flex flex-col gap-5 text-base text-black font-medium">
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
  </div>
</div>
<!-- Mobile Navigation Layout: End -->