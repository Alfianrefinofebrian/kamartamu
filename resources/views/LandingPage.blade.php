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

<!-- Hero Section IG Style -->
<section class="relative min-h-screen pt-16 overflow-hidden">
  <div class="relative w-full h-[calc(100vh-64px)] overflow-hidden">
    <!-- Wrapper -->
    <div id="hero-slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">
      <!-- Slide 1 -->
      <img src="/images/bg1.webp" class="slide w-full h-full object-fill flex-shrink-0">
      <!-- Slide 2 -->
      <img src="/images/bg2.webp" class="slide w-full h-full object-fill flex-shrink-0">
      <!-- Slide 3 -->
      <img src="/images/bg3.webp" class="slide w-full h-full object-fill flex-shrink-0">
    </div>

    <!-- Dots -->
    <div id="slider-dots" class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex"></div>

    <!-- Zones -->
    <div id="left-zone" class="absolute inset-y-0 left-0 w-1/3 cursor-pointer"></div>
    <div id="right-zone" class="absolute inset-y-0 right-0 w-1/3 cursor-pointer"></div>
  </div>
</section>


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


<!-- Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 transform -translate-y-7">

  <!-- Item 1 -->
  <div class="font-montserrat text-center">
    <div class="mx-auto max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-4 hover:-translate-y-6 transition duration-300">
      <img src="/images/why-stay-section/IMG-20220223-WA0025.webp"
           alt="Beda Villa, Beda Cerita" 
           class="w-full h-auto rounded-t-full" />
    </div>
    <h3 class="font-montserrat mt-6 text-[32px] font-medium text-[#000000] leading-snug">
      Beda Villa, <p>Beda Cerita</p>
    </h3>
    <p class="mt-2 font-montserrat text-[16px] text-[#000000] leading-relaxed">
      Setiap unit Kamar Tamu punya desain yang berbeda, ini memberikan pengalaman yang tak terlupakan.
    </p>
  </div>

  <!-- Item 2 -->
  <div class="font-montserrat text-center">
    <div class="mx-auto max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-4 hover:-translate-y-6 transition duration-300">
      <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
           alt="Stay 2 Malam, Gratis 1 Malam" 
           class="w-full h-auto rounded-t-full" />
    </div>
    <h3 class="font-montserrat mt-6 text-[32px] font-medium text-[#000000] leading-snug">
      Stay 2 Malam, <p>Gratis 1 Malam</p>
    </h3>
    <p class="mt-2 font-montserrat text-[16px] text-[#000000] leading-relaxed">
      Nginep 2 malam, kami kasih 1 malam tambahan. Lebih lama, lebih hemat.
    </p>
  </div>

  <!-- Item 3 -->
  <div class="font-montserrat text-center">
    <div class="mx-auto max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-4 hover:-translate-y-6 transition duration-300">
      <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
           alt="Disambut langsung oleh Tuan Rumah" 
           class="w-full h-auto rounded-t-full" />
    </div>
    <h3 class="font-montserrat mt-6 text-[32px] font-medium text-[#000000] leading-snug">
      Disambut langsung <p>oleh Tuan Rumah</p>
    </h3>
    <p class="mt-2 font-montserrat text-[16px] text-[#000000] leading-relaxed">
      Anda disambut dan dijamu langsung oleh Tuan Rumah. Lebih personal. Lebih hangat.
    </p>
  </div>

  <!-- Item 4 -->
  <div class="font-montserrat text-center">
    <div class="mx-auto max-w-[220px] overflow-hidden rounded-t-full shadow-lg transform -translate-y-4 hover:-translate-y-6 transition duration-300">
      <img src="/images/why-stay-section/IMG-20220223-WA0025.webp" 
           alt="13 Villa terbaik di Yogyakarta" 
           class="w-full h-auto rounded-t-full" />
    </div>
    <h3 class="font-montserrat mt-6 text-[32px] font-medium text-[#000000] leading-snug">
      13 Villa terbaik <p>di Yogyakarta</p>
    </h3>
    <p class="mt-2 font-montserrat text-[16px] text-[#000000] leading-relaxed">
      Kami punya 13 unit villa yang tersebar di Jogja. Pilih lokasi yang paling cocok buat liburan.
    </p>
  </div>

</div>
</div>
</section>

<!-- Villas Section -->
<section id="villas" class="py-20 bg-[#FFFBF0] font-montserrat">
  <div class="container mx-auto px-4">
    <!-- Title -->
    <h2 class="text-6xl font-bold text-[#00576D] mb-2">VILLAS</h2>
    <div class="h-1 w-20 mb-12"></div>

    <!-- Villas Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
  @foreach($villas as $villa)
    <a href="{{ route('villas.show', $villa) }}" 
       class="block bg-[#FFF9E6] rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
       
      @if($villa->image)
        <img src="{{ asset('storage/' . $villa->image) }}" 
             alt="{{ $villa->name }}" 
             class="w-full h-64 object-cover">
      @endif

      <div class="p-4">
        <!-- Villa Name -->
        <h3 class="text-[20px] font-extrabold uppercase text-[#001D4A] mb-2">
          {{ $villa->name }}
        </h3>

        <!-- Location -->
        <div class="flex items-center gap-2 text-[#001D4A] font-medium mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-[#001D4A]" viewBox="0 0 24 24">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 
                     9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 
                     1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
          </svg>
          <span>{{ $villa->location }}</span>
        </div>

        <!-- Description -->
        <p class="text-[16px] text-[#000000] leading-relaxed">
          {{ $villa->description }}
        </p>
      </div>
    </a>
  @endforeach
</div>
</section>
    
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
