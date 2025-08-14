<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gigiku Dental Clinic</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/custom.css')
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <link rel="stylesheet" href="custom.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body class="font-[Poppins] bg-[#f5f5f5] text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="flex justify-between items-center px-[10%] py-6 bg-gradient-to-r from-[#f0baaf] via-[#f6ccc4] to-[#ffe6e1]">
      <div class="logo">
        <img src="img/logo.png" class="w-[59%]" alt="Logo">
      </div>
      <nav>
        <ul class="flex gap-6">
          <li><a href="#" class="text-[#e67373] font-medium hover:underline">Home</a></li>
          <li><a href="#" class="text-[#e67373] font-medium hover:underline">About</a></li>
          <li><a href="#" class="text-[#e67373] font-medium hover:underline">Reservasi</a></li>
          <li><a href="#" class="text-[#e67373] font-medium hover:underline">Navigasi</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="px-[10%] py-24 bg-gradient-to-r from-[#f0baaf] via-[#f6ccc4] to-[#ffe6e1] text-left">
    <div>
      <h1 class="text-4xl font-bold text-[#e67373] mb-5">GIGIKU DENTAL CLINIC</h1>
      <p class="text-base text-[#d88f8f] max-w-xl mb-12">
        Our mission is to create real comfort, and service for patients in getting best dental treatments and medication. 
        2000+ cases has been handled well by our professional dentist.
      </p>
      <a href="#" class="px-6 py-3 bg-[#e67373] text-white rounded hover:bg-[#d86464] transition">Learn More</a>
    </div>
  </section>

  <!-- Promo -->
  <section class="py-10 px-[10%] text-center">
  <h2 class="text-2xl font-semibold">Promo Kami</h2>
  
  <div class="relative mt-6 overflow-hidden">
    <!-- Carousel Track -->
    <div id="promoCarousel" class="flex transition-transform duration-500 ease-in-out">
      <img src="{{ asset('IMG/Promo/promo1.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo2.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo1.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo2.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo1.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo2.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
      <img src="{{ asset('IMG/Promo/promo1.webp') }}" alt="Promo" class="w-full max-w-sm flex-shrink-0 rounded-lg shadow-md mx-2">
    </div>

    <button id="prevBtn" class="absolute top-1/2 left-4 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-700 rounded-full p-2 shadow">
      &#10094;
    </button>
    <button id="nextBtn" class="absolute top-1/2 right-4 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-700 rounded-full p-2 shadow">
      &#10095;
    </button>
  </div>
</section>

<script>
  const carousel = document.getElementById('promoCarousel');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let index = 0;
  const itemWidth = carousel.children[0].offsetWidth + 16; // gambar + gap (mx-2 = 8px tiap sisi)

  nextBtn.addEventListener('click', () => {
    if (index < carousel.children.length - 1) {
      index++;
      carousel.style.transform = `translateX(${-itemWidth * index}px)`;
    }
  });

  prevBtn.addEventListener('click', () => {
    if (index > 0) {
      index--;
      carousel.style.transform = `translateX(${-itemWidth * index}px)`;
    }
  });
</script>


  <!-- Service -->
  <section class="py-10">
  <div class="flex justify-center gap-10 mt-10">
    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-calendar-check"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Reservasi</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-ticket-perforated"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Promo</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-coin"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Pricelist</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-wallet"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Payment history</span>
    </div>
  </div>

  <div class="flex justify-center gap-10 mt-10">
    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-house"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Cabang</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-person"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Dokter</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-shield-check"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Asuransi</span>
    </div>

    <div class="flex flex-col items-center group cursor-pointer">
      <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-2xl text-gray-700 transition-all duration-300 group-hover:[background-color:#f08080] group-hover:text-white">
        <i class="bi bi-file-person"></i>
      </div>
      <span class="mt-2 text-sm font-medium transition-colors duration-300 group-hover:[color:#f08080]">Rekam medis</span>
    </div>
  </div>
</section>

  <!-- Galeri -->
  <section class="py-10 px-[10%]">
    <h2 class="text-center text-2xl font-semibold mb-8">Galeri</h2>
    <div class="carousel-wrapper">
      <div class="galeri-foto">
        <button class="carousel-button prev" onclick="slideGaleri(-1)">&#10094;</button>
        <div class="carousel-track" id="galeriTrack">
          <div class="carousel-item">
            <img src="{{ asset('IMG/Promo/testimoni.webp') }}" width="40%" alt="Foto 1">
            <div class="carousel-caption">
              <strong>Testimoni:</strong><br>“Setelah treatment di sini, wajahku jadi glowing banget. Pelayanan juga ramah dan nyaman!”
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/Promo/testimoni.webp') }}" width="40%" alt="Foto 3">
            <div class="carousel-caption">
              <strong>Testimoni:</strong><br>“Sudah 3 kali datang dan selalu puas! Recommended banget untuk yang cari klinik aman dan nyaman.”
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/Promo/testimoni.webp') }}" width="40%" alt="Foto 3">
            <div class="carousel-caption">
              <strong>Testimoni:</strong><br>“Sudah 3 kali datang dan selalu puas! Recommended banget untuk yang cari klinik aman dan nyaman.”
            </div>
          </div>
        </div>
        <button class="carousel-button next" onclick="slideGaleri(1)">&#10095;</button>
      </div>
    </div>
  </section>

  <!-- Artikel -->
  <section class="py-10 px-[10%]">
    <h2 class="text-center text-2xl font-semibold mb-8">Artikel</h2>
    <div class="artikel-carousel-wrapper">
      <button class="artikel-button prev" onclick="slideArtikel(-1)">&#10094;</button>
      <div class="artikel-track" id="artikelTrack">
        <div class="artikel-card">
          <img src="{{ asset('IMG/Promo/banner1.webp') }}" alt="Artikel 1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="artikel-card">
          <img src="{{ asset('IMG/Promo/banner1.webp') }}" alt="Artikel 1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="artikel-card">
          <img src="{{ asset('IMG/Promo/banner2.webp') }}" alt="Artikel 2">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut veritatis cupiditate...</p>
        </div>
        <div class="artikel-card">
          <img src="{{ asset('IMG/Promo/banner3.webp') }}" alt="Artikel 3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut veritatis cupiditate...</p>
        </div>
      </div>
      <button class="artikel-button next" onclick="slideArtikel(1)">&#10095;</button>
    </div>
  </section>

  <script>
    // Galeri
const galeriTrack = document.getElementById("galeriTrack");
const totalSlides = document.querySelectorAll(".carousel-item").length;
let galeriIndex = 0;
function slideGaleri(direction) {
  galeriIndex = (galeriIndex + direction + totalSlides) % totalSlides;
  galeriTrack.style.transform = `translateX(-${galeriIndex * 100}%)`;
}
setInterval(() => { slideGaleri(1); }, 7000);

// Artikel
let artikelIndex = 0;
function slideArtikel(direction) {
  const track = document.getElementById('artikelTrack');
  const items = document.querySelectorAll('.artikel-card');
  const itemWidth = items[0].offsetWidth + 30;
  artikelIndex += direction;
  if (artikelIndex < 0) artikelIndex = items.length - 1;
  if (artikelIndex >= items.length) artikelIndex = 0;
  track.style.transform = `translateX(${-artikelIndex * itemWidth}px)`;
}

  </script>
</body>
</html>
