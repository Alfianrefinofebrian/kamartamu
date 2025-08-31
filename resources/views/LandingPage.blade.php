<!DOCTYPE html>
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
      <img src="/images/bg1.webp" class="slide w-full h-full object-cover flex-shrink-0">
      <!-- Slide 2 -->
      <img src="/images/bg2.webp" class="slide w-full h-full object-cover flex-shrink-0">
      <!-- Slide 3 -->
      <img src="/images/bg3.webp" class="slide w-full h-full object-cover flex-shrink-0">
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
<h2 class="font-montserrat text-center text-3xl md:text-6xl font-semibold text-gray-900 mb-20">
  Why Stay With Kamar Tamu?
</h2>

<!-- Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Item 1 -->
      <div class="text-center">
        <div class="relative w-56 h-72 mx-auto overflow-hidden rounded-t-full shadow-lg">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800" 
               alt="Beda Villa, Beda Cerita" 
               class="w-full h-full object-cover" />
        </div>
        <h3 class="mt-6 text-lg font-bold text-gray-900">Beda Villa, Beda Cerita</h3>
        <p class="mt-2 text-gray-700 text-sm leading-relaxed">
          Setiap unit Kamar Tamu punya desain yang berbeda, ini memberikan pengalaman yang tak terlupakan.
        </p>
      </div>

      <!-- Item 2 -->
      <div class="text-center">
        <div class="relative w-56 h-72 mx-auto overflow-hidden rounded-t-full shadow-lg">
          <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=800" 
               alt="Stay 2 Malam, Gratis 1 Malam" 
               class="w-full h-full object-cover" />
        </div>
        <h3 class="mt-6 text-lg font-bold text-gray-900">Stay 2 Malam, Gratis 1 Malam</h3>
        <p class="mt-2 text-gray-700 text-sm leading-relaxed">
          Nginep 2 malam, kami kasih 1 malam tambahan. Lebih lama, lebih hemat.
        </p>
      </div>

      <!-- Item 3 -->
      <div class="text-center">
        <div class="relative w-56 h-72 mx-auto overflow-hidden rounded-t-full shadow-lg">
          <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=800" 
               alt="Disambut langsung oleh Tuan Rumah" 
               class="w-full h-full object-cover" />
        </div>
        <h3 class="mt-6 text-lg font-bold text-gray-900">Disambut langsung oleh Tuan Rumah</h3>
        <p class="mt-2 text-gray-700 text-sm leading-relaxed">
          Anda disambut dan dijamu langsung oleh Tuan Rumah. Lebih personal. Lebih hangat.
        </p>
      </div>

      <!-- Item 4 -->
      <div class="text-center">
        <div class="relative w-56 h-72 mx-auto overflow-hidden rounded-t-full shadow-lg">
          <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=800" 
               alt="13 Villa terbaik di Yogyakarta" 
               class="w-full h-full object-cover" />
        </div>
        <h3 class="mt-6 text-lg font-bold text-gray-900">13 Villa terbaik di Yogyakarta</h3>
        <p class="mt-2 text-gray-700 text-sm leading-relaxed">
          Kami punya 13 unit villa terbaik di Jogja. Pilih sesuai selera, semua nyaman dan eksklusif.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Villas Section -->
  <section id="villas" class="py-20 bg-[#FFFBF0]">
    <div class="container mx-auto px-4">
      <!-- Title -->
      <h2 class="text-5xl font-bold text-[#00576D] mb-2">VILLAS</h2>
      <div class="h-1 w-20 bg-[#00576D] mb-12"></div>

      <!-- Villas Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($villas as $villa)
          <a href="{{ route('villas.show', $villa) }}" class="block shadow-md hover:shadow-xl transition rounded-xl overflow-hidden bg-white">
            @if($villa->image)
              <img src="{{ asset('storage/' . $villa->image) }}" alt="{{ $villa->name }}" class="w-full h-48 object-cover">
            @endif
            <div class="p-4">
              <h3 class="font-bold text-lg">{{ $villa->name }}</h3>
              <p class="text-gray-600">{{ $villa->location }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>


    
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
