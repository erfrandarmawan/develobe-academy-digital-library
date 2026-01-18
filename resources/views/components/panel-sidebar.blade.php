<aside class="w-3/12 min-w-3/12 bg-white px-5 py-10 rounded-lg drop-shadow-lg hidden lg:flex flex-col items-center">
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