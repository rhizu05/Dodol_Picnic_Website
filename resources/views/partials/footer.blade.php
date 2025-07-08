<footer class="bg-pink-600 text-white py-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6 text-sm">

    {{-- Kolom 1: Logo dan Kontak --}}
    <div>
      <img src="{{ asset('images/picnic-logo.png') }}" alt="PICNIC Logo" class="h-14 mb-4">
      <h3 class="font-bold uppercase">PT. HERLINAH CIPTA PRATAMA</h3>
      <p class="mt-2">Jl. Pasundan 102, Kota Kulon, Kec. Garut<br>
        Kota, Kabupaten Garut, Jawa Barat 44112</p>
      <div class="mt-4 space-y-2">
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/email.svg') }}" class="w-5 h-5">
          <span>Example@gmail.com</span>
        </div>
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/phone.svg') }}" class="w-5 h-5">
          <span>+62 123 456 789</span>
        </div>
      </div>
    </div>

    {{-- Kolom 2: Pages --}}
    <div>
      <h3 class="font-bold mb-2">Pages</h3>
      <ul class="space-y-1">
        <li><a href="/" class="hover:underline">Home</a></li>
        <li><a href="#about" class="hover:underline">About</a></li>
        <li><a href="#products" class="hover:underline">Product</a></li>
        <li><a href="#blogs" class="hover:underline">Blogs</a></li>
        <li><a href="#visit" class="hover:underline">Visit</a></li>
        <li><a href="#contact" class="hover:underline">Contact</a></li>
        <li><a href="#partnership" class="hover:underline">Partnership</a></li>
      </ul>
    </div>

    {{-- Kolom 3: Official Store --}}
    <div>
      <h3 class="font-bold mb-2">Official Store</h3>
      <ul class="space-y-1">
        <li><a href="#" class="hover:underline">Shopee Official</a></li>
        <li><a href="#" class="hover:underline">Tokopedia Official</a></li>
        <li><a href="#" class="hover:underline">Lazada Official</a></li>
        <li><a href="#" class="hover:underline">Blibli Official</a></li>
      </ul>
    </div>

    {{-- Kolom 4: Sosial Media --}}
    <div>
      <h3 class="font-bold mb-2">Official Social Media</h3>
      <div class="flex space-x-3 mt-2">
        <a href="#"><img src="{{ asset('images/tiktok-icon.svg') }}" class="w-6 h-6" alt="TikTok"></a>
        <a href="#"><img src="{{ asset('images/ig-icon.svg') }}" class="w-6 h-6" alt="Instagram"></a>
        <a href="#"><img src="{{ asset('images/linkedin-icon.svg') }}" class="w-6 h-6" alt="LinkedIn"></a>
      </div>
    </div>

  </div>

  {{-- Bottom Bar --}}
  <div class="text-center text-white text-sm mt-8 border-t border-white/30 pt-4">
    Made with <span class="text-black">❤</span> Copyright © {{ date('Y') }} PICNIC. All Rights Reserved.
  </div>
</footer>
