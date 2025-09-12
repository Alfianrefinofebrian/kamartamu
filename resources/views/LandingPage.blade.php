<html lang="en">
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar Tamu - Villa Rentals in Yogyakarta</title>
     @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">
</head>
<body>

  <!-- React Navbar -->
  <div id="navbar"></div>

<!-- React Navbar -->
  <div id="hero"></div>

    <!-- Why Stay Section -->
<section id="benefits" class="py-20 bg-[#FFFDEB]">
  <div class="container mx-auto px-4">
    <!-- Title -->
    <h2 class="font-montserrat text-center text-3xl md:text-6xl font-semibold mb-20 
               bg-clip-text text-transparent bg-cover bg-center"
        style="background-image: url('/images/bg1.webp');">
      Why Stay With Kamar Tamu?
    </h2>
  </div>
</section>


<!-- Why Stay Section -->
<section class="py-12 sm:py-20 bg-[#FFFDEB]">
  <div class="container mx-auto px-4">
    <!-- Grid -->
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-10 transform -translate-y-4 sm:-translate-y-7">

      <!-- Item 1 -->
      <div class="font-montserrat text-center">
        <div class="mx-auto max-w-[160px] sm:max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-2 sm:-translate-y-4 hover:-translate-y-6 transition duration-300">
          <img src="/images/1.png"
               alt="Beda Villa, Beda Cerita" 
               class="w-full h-auto rounded-t-full" />
        </div>
        <h3 class="font-montserrat mt-4 sm:mt-6 text-lg sm:text-[32px] font-medium text-[#000000] leading-snug">
          Beda Villa, <p>Beda Cerita</p>
        </h3>
        <p class="mt-2 font-montserrat text-sm sm:text-[16px] text-[#000000] leading-relaxed">
          Setiap unit Kamar Tamu punya desain yang berbeda, ini memberikan pengalaman yang tak terlupakan.
        </p>
      </div>

      <!-- Item 2 -->
      <div class="font-montserrat text-center">
        <div class="mx-auto max-w-[160px] sm:max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-2 sm:-translate-y-4 hover:-translate-y-6 transition duration-300">
          <img src="/images/2.png" 
               alt="Stay 2 Malam, Gratis 1 Malam" 
               class="w-full h-auto rounded-t-full" />
        </div>
        <h3 class="font-montserrat mt-4 sm:mt-6 text-lg sm:text-[32px] font-medium text-[#000000] leading-snug">
          Stay 2 Malam, <p>Gratis 1 Malam</p>
        </h3>
        <p class="mt-2 font-montserrat text-sm sm:text-[16px] text-[#000000] leading-relaxed">
          Nginep 2 malam, kami kasih 1 malam tambahan. Lebih lama, lebih hemat.
        </p>
      </div>

      <!-- Item 3 -->
      <div class="font-montserrat text-center">
        <div class="mx-auto max-w-[160px] sm:max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-2 sm:-translate-y-4 hover:-translate-y-6 transition duration-300">
          <img src="/images/3.png" 
               alt="Disambut langsung oleh Tuan Rumah" 
               class="w-full h-auto rounded-t-full" />
        </div>
        <h3 class="font-montserrat mt-4 sm:mt-6 text-lg sm:text-[32px] font-medium text-[#000000] leading-snug">
          Disambut langsung <p>oleh Tuan Rumah</p>
        </h3>
        <p class="mt-2 font-montserrat text-sm sm:text-[16px] text-[#000000] leading-relaxed">
          Anda disambut dan dijamu langsung oleh Tuan Rumah. Lebih personal. Lebih hangat.
        </p>
      </div>

      <!-- Item 4 -->
      <div class="font-montserrat text-center">
        <div class="mx-auto max-w-[160px] sm:max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-2 sm:-translate-y-4 hover:-translate-y-6 transition duration-300">
          <img src="/images/4.png" 
               alt="13 Villa terbaik di Yogyakarta" 
               class="w-full h-auto rounded-t-full" />
        </div>
        <h3 class="font-montserrat mt-4 sm:mt-6 text-lg sm:text-[32px] font-medium text-[#000000] leading-snug">
          Banyak Pilihan, <p>Villa terbaik</p>
        </h3>
        <p class="mt-2 font-montserrat text-sm sm:text-[16px] text-[#000000] leading-relaxed">
          Kamu punya beberapa unit villa yang tersebar di Jogja. Pilih lokasi yang paling cocok buat liburan.
        </p>
      </div>

    </div>
  </div>
</section>


  <div id="villas"></div>
   
  <section id="booking" class="bg-[#024b63] py-16 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-white leading-tight mb-10">
            Find Your <br> Villa Here!
        </h2>

        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col md:flex-row md:items-center gap-6">
            <div class="flex-1 space-y-4">
                <!-- Destination -->
                <div>
                    <label class="text-sm text-gray-500">Districk, destination, villa name</label>
                    <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 mt-1">
                        <i class="fa-solid fa-location-dot text-gray-500 mr-2"></i>
                        <input type="text" placeholder="Yogyakarta" 
                               class="w-full outline-none text-sm placeholder-gray-400">
                    </div>
                </div>

                <!-- Check-in & Duration -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-gray-500">Check-In</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 mt-1">
                            <i class="fa-solid fa-calendar-days text-gray-500 mr-2"></i>
                            <input type="date" 
                                   class="w-full outline-none text-sm text-gray-700">
                        </div>
                    </div>
                    <div>
                        <label class="text-sm text-gray-500">Duration</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 mt-1">
                            <i class="fa-solid fa-moon text-gray-500 mr-2"></i>
                            <input type="text" placeholder="1 Night"
                                   class="w-full outline-none text-sm placeholder-gray-400">
                        </div>
                    </div>
                </div>

                <!-- Guest & Rooms -->
                <div>
                    <label class="text-sm text-gray-500">Guest & rooms</label>
                    <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 mt-1">
                        <i class="fa-solid fa-user-group text-gray-500 mr-2"></i>
                        <input type="text" placeholder="2 Guests, 1 Room" 
                               class="w-full outline-none text-sm placeholder-gray-400">
                    </div>
                </div>
            </div>

            <!-- Search Button -->
            <div class="md:self-end">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg flex items-center justify-center gap-2 font-medium">
                    <i class="fa-solid fa-magnifying-glass"></i> Search
                </button>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="bg-[#FFF8E7] py-20 scroll-mt-20">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
    <!-- Kiri: Logo -->
    <div class="flex justify-center md:justify-start">
      <!-- Ganti ini dengan logo asli -->
      <img src="/images/logooo.png" alt="Kamar Tamu Logo" class="w-100">
    </div>

    <!-- Kanan: Contact Box -->
    <div class="bg-[#084C61] text-white p-8 rounded-lg shadow-lg max-w-md">
      <p class="text-sm mb-2">Any questions?</p>
      <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
      <p class="text-sm mb-6 leading-relaxed">
        Have questions or need assistance? Reach out to our team – 
        we're here to help you find the right solutions quickly and easily.
      </p>

      <!-- Sosmed Links -->
      <div class="flex flex-col gap-4">
        
        <!-- Facebook -->
        <a href="https://facebook.com/villakamartamu" target="_blank" 
           class="flex items-center gap-3 hover:text-gray-300">
          <!-- FB SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2c0-2 1.2-3.1 3-3.1 .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.8h2.5l-.4 3h-2.1v7A10 10 0 0 0 22 12"/>
          </svg>
          <span>Villa Kamar Tamu Indonesia</span>
        </a>

        <!-- WhatsApp -->
          <a href="https://wa.me/82137984673" target="_blank" class="flex items-center gap-3 hover:text-gray-300">
            <i class="bi bi-whatsapp text-xl"></i>
            <span>+62 821-3798-4673</span>
          </a>

        <!-- Instagram -->
        <a href="https://instagram.com/kamartamu.id" target="_blank" 
           class="flex items-center gap-3 hover:text-gray-300">
          <!-- IG SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.8-.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z"/>
          </svg>
          <span>@kamartamu.id</span>
        </a>

        <!-- TikTok -->
          <a href="https://www.tiktok.com/@kamartamuindonesia" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 hover:text-gray-300">
            <i class="bi bi-tiktok text-xl"></i>
            <span>@kamartamuindonesia</span>
          </a>

      </div>
    </div>

  </div>
</section>

<footer class="footer bg-[#084C61] text-white py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Kolom 1: Logo -->
    <div class="flex flex-col items-start space-y-4">
      <!-- Logo utama -->
      <a href="/" aria-label="Kamar Tamu Home" class="inline-block">
        <img src="/images/kamartamu.png" alt="Kamar Tamu Logo" class="w-40 brand-img">
      </a>
      <!-- Brand lain -->
      <a href="https://imersa.co.id/" aria-label="Imersa">
        <img src="/images/imersa.png" alt="Brand 1" class="w-32 brand-img">
      </a>
      <a href="http://englishcafeindonesia.net/" aria-label="English Cafe Indonesia">
        <img src="/images/ecafe.png" alt="Brand 2" class="w-32 brand-img">
      </a>
    </div>

  <!-- Kolom 2: Explore -->
    <div>
      <h3 class="font-semibold mb-4">Explore</h3>
      <ul class="space-y-3">
    <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
    <li><a href="#villas" class="hover:text-gray-300">Villas</a></li>
    <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
      </ul>
    </div>

    <!-- Kolom 3: Information -->
    <div>
      <h3 class="font-semibold mb-4">Information</h3>
      <ul class="space-y-3">
    <li><a href="#brand" class="hover:text-gray-300">Our Brand</a></li>
    <li><a href="#services" class="hover:text-gray-300">Our Service</a></li>
      </ul>
    </div>

    <!-- Kolom 4: Support -->
    <div>
      <h3 class="font-semibold mb-4">Support</h3>
      <ul class="space-y-2">
        <li>Yogyakarta, IDN</li>
        <li><a href="https://wa.me/62895372290006" target="_blank" class="hover:text-gray-300">+62 895-3722-90006</a></li>
        <li><a href="mailto:booking@kamartamuindonesia.com" class="hover:text-gray-300">booking@kamartamuindonesia.com</a></li>
      </ul>

      <!-- Sosmed -->
      <div class="flex gap-4 mt-6">
        <!-- Instagram -->
        <a href="https://instagram.com/kamartamu.id" target="_blank" class="hover:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.8-.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z"/>
          </svg>
        </a>
        <!-- Facebook -->
        <a href="https://facebook.com/villakamartamu" target="_blank" class="hover:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2c0-2 1.2-3.1 3-3.1 .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.8h2.5l-.4 3h-2.1v7A10 10 0 0 0 22 12"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- Anchor targets for footer links (placeholder sections) -->
<section id="brand" class="scroll-mt-20"></section>
<section id="services" class="scroll-mt-20"></section>

<!-- Copyright -->
<div class="bg-[#FFF8E7] text-left text-sm text-gray-700 py-4 pl-2 mt-1">
  ©2025 Kamar Tamu. All rights reserved. Crafted with elegance in Yogyakarta.
</div>


</body>
</html>
