<html lang="en">
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar Tamu - Villa Rentals in Yogyakarta</title>
     @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
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
          <img src="/images/why-stay-section/IMG-20220223-WA0025.webp"
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
          <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
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
          <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
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
          <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
               alt="13 Villa terbaik di Yogyakarta" 
               class="w-full h-auto rounded-t-full" />
        </div>
        <h3 class="font-montserrat mt-4 sm:mt-6 text-lg sm:text-[32px] font-medium text-[#000000] leading-snug">
          13 Villa terbaik <p>di Yogyakarta</p>
        </h3>
        <p class="mt-2 font-montserrat text-sm sm:text-[16px] text-[#000000] leading-relaxed">
          Kami punya 13 unit villa yang tersebar di Jogja. Pilih lokasi yang paling cocok buat liburan.
        </p>
      </div>

    </div>
  </div>
</section>

</section>

 <!-- React Villas -->
  <div id="villas"></div>
    
</body>
</html>
