@props(['category'])
<a href="/books?category_id={{ $category->id }}"
  title="Klik untuk melihat detail kategori"
  class="group">
  <div class="w-full h-32 lg:h-48 flex flex-col items-center justify-center rounded-lg lg:rounded-2xl border relative overflow-hidden">
    <!-- Category Image: Start -->
    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-110 duration-200"
      alt="Cover buku"/>
    <!-- Category Image: End -->

    <!-- Category Image Overlay: Start -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/50 z-1">

    </div>
    <!-- Category Image Overlay: End -->

    <!-- Title: Start -->
    <span class="uppercase text-white font-bold text-center text-2xl lg:text-4xl z-2 group-hover:text-primary duration-200">
      {{ $category->title }}
    </span>
    <!-- Title: End -->
  </div>
</a>