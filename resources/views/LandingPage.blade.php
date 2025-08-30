<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar Tamu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#benefits">Benefits</a></li>
            <li><a href="#properties">Top Properties</a></li>
            <li><a href="#villas">Our Villas</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="carousel" id="carousel">
        <div class="carousel-track" id="track">
            @foreach($sliders as $slide)
                <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}">
            @endforeach
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="benefits-section" id="benefits">
        <h2 class="benefits-title">Why Stay With Kamar Tamu?</h2>
    </section>

    <!-- Properties Section -->
    <section id="properties">
        <h2 class="section-title">Top Properties</h2>
        <div class="properties-container">
            @foreach($properties as $property)
                <div class="property-card">
                    @if($property->image)
                        <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}">
                    @endif
                    <div class="property-content">
                        <h3>{{ $property->title }}</h3>
                        <p>{{ $property->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Villas Section -->
    <section class="villas-section" id="villas">
        <h2 class="section-title">Our Villas</h2>
        <div class="villas-container">
            @foreach($villas as $villa)
                <div class="villa-card">
                    @if($villa->image)
                        <img src="{{ asset('storage/' . $villa->image) }}" alt="{{ $villa->name }}">
                    @endif
                    <h3>{{ $villa->name }}</h3>
                    <p>{{ $villa->location }}</p>
                    <p><strong>Harga Weekday:</strong> Rp{{ number_format($villa->harga_weekday, 0, ',', '.') }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
