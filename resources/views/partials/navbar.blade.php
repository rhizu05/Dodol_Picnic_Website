<nav class="absolute top-0 left-0 w-full z-20 px-6 py-4 text-white">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center">

    {{-- Kiri: Ikon Sosial & Menu --}}
    <div class="flex items-center gap-x-8">
      <div class="flex items-center gap-x-3">
        <a href="#" class="opacity-80 hover:opacity-100 transition">
          <img src="{{ asset('images/ig-icon.svg') }}" class="w-5 h-5" alt="Instagram">
        </a>
        <a href="#" class="opacity-80 hover:opacity-100 transition">
          <img src="{{ asset('images/tiktok-icon.svg') }}" class="w-5 h-5" alt="TikTok">
        </a>
        <a href="#" class="opacity-80 hover:opacity-100 transition">
          <img src="{{ asset('images/linkedin-icon.svg') }}" class="w-5 h-5" alt="LinkedIn">
        </a>
      </div>

      <div class="flex items-center gap-x-6 text-sm font-medium">
        <a href="/" class="hover:underline">Home</a>
        <a href="#about" class="hover:underline">About</a>
        <a href="#products" class="hover:underline">Products</a>
      </div>
    </div>

    {{-- Tengah: Logo --}}
    <div class="absolute left-1/2 -translate-x-1/2">
      <a href="/">
        <img src="{{ asset('images/picnic-logo.png') }}" alt="PICNIC Logo" class="h-10">
      </a>
    </div>

    {{-- Kanan: Menu & Tombol --}}
    <div class="flex items-center gap-x-6 text-sm font-medium">
      <a href="#blogs" class="hover:underline">Blogs</a>
      <a href="#visit" class="hover:underline">Visit</a>
      <a href="#contact" class="hover:underline">Contact</a>

      <a href="#partnership"
         class="border border-white rounded-full px-5 py-2 text-sm font-semibold hover:bg-white hover:text-black transition duration-300">
        Partnership
      </a>
    </div>
  </div>
</nav>
