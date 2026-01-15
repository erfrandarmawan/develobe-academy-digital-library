<nav {{ $attributes->merge(['class' => 'w-full flex flex-row items-center z-10']) }}>
  @include('components.logo')

  <ul class="flex flex-row ms-auto gap-10 items-center text-xl text-white">
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
</nav>