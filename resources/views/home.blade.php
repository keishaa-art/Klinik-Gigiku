
@extends('layouts.index')

@section('konten')  

  <!-- Hero -->
  <section class="bg-gradient-to-r from-soft to-accent py-12 text-center text-T2">
    <h1 class="text-3xl font-bold">GIGIKU DENTAL CLINIC</h1>
    <p class="mt-2 max-w-2xl mx-auto text-left">Our mission is to create trust comfort, and serenity for patients in getting best dental treatments and medications. 20.000+ cases has been handled well by our professional dentist.</p>
    <button class="mt-4 px-6 py-2 bg-T1 text-white font-semibold rounded hover:bg-gray-100">Learn More</button>
  </section>

  <!-- Stats -->
  <section class="text-center py-10 bg-white">
    <h2 class="text-[24px] font-bold text-T2">Expert Care for Your Dream Smile</h2>
    <div class="flex justify-center gap-10 mt-6">
      <div class="border">
        <p class="text-8xl font-bold text-accent">20K</p>
        <p>Patients</p>
      </div>
      <div>
        <p class="text-8xl font-bold text-accent">40K</p>
        <p>Treatments</p>
      </div>
      <div>
        <p class="text-8xl font-bold text-accent">5+</p>
        <p>Years Exp.</p>
      </div>
    </div>
  </section>

  <!-- Image -->
 <section class="my-10">
  <h2 class="text-[24px] font-bold text-center text-T2 mb-6">Gallery Klinik</h2>

  <div class="relative overflow-hidden max-w-7xl mx-auto">
    <!-- Gambar Carousel -->
    <div id="gallery" class="flex transition-transform duration-500 ease-in-out">
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="ruang klinik" />
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="ruang klinik" />
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="ruang klinik" />
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="ruang klinik" />
      <img src="https://tse3.mm.bing.net/th/id/OIP.gMzCUjilVaJtE6tpsrjj1wHaE8?pid=Api&P=0&h=180" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="dokter gigi" />
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="tindakan medis" />
      <img src="https://static.honestdocs.id/system/blog_articles/main_hero_images/000/005/552/original/perbedaan_dokter_gigi_dan_ortodontis.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="alat medis" />
    </div>

    <!-- Tombol Navigasi -->
    <button onclick="scrollGallery(-1)" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-xl px-3 py-2 rounded-r">
      &#10094;
    </button>
    <button onclick="scrollGallery(1)" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-xl px-3 py-2 rounded-l">
      &#10095;
    </button>

<script>const gallery = document.getElementById('gallery');
  const cardWidth = gallery.children[0].offsetWidth + 16; // width + margin if needed

  function scrollGallery(dir) {
    gallery.scrollBy({ left: dir * cardWidth, behavior: 'smooth' });
  }</script>

  </div>
</section>



  <!-- Our Services -->
  <section class="bg-primary py-10 text-center">
    <h2 class="text-[24px] font-semibold text-T2">Our Service</h2>
    <p class="text-gray-600 mt-2">Personalized plans and expert dental care.</p>
    <section class="my-10">
  <h2 class="text-2xl font-bold text-center text-accent mb-6">Gallery Klinik</h2>

  <div class="relative overflow-hidden max-w-7xl mx-auto">
    <!-- Gambar Carousel -->
    <div id="gallery" class="flex transition-transform duration-500 ease-in-out">
      <img src="gallery1.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="ruang klinik" />
      <img src="gallery2.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="dokter gigi" />
      <img src="gallery3.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="tindakan medis" />
      <img src="gallery4.jpg" class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0" alt="alat medis" />
    </div>

    <!-- Tombol Navigasi -->
    <button onclick="scrollGallery(-1)" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-xl px-3 py-2 rounded-r">
      &#10094;
    </button>
    <button onclick="scrollGallery(1)" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-xl px-3 py-2 rounded-l">
      &#10095;
    </button>
  </div>
</section>

<!-- Script -->
<script>
  const gallery = document.getElementById('gallery');
  const cardWidth = gallery.children[0].offsetWidth + 16; // width + margin if needed

  function scrollGallery(dir) {
    gallery.scrollBy({ left: dir * cardWidth, behavior: 'smooth' });
  }
</script>

  </section>

  <!-- Appointment -->
  <section class="bg-primary text-center">
    <div class="max-w-md mx-auto p-6 text-T2 ">
      <h3 class="text-lg font-bold">Appointment Schedule</h3>
      <p class="text-sm mt-2 text-left">Your perfect smile is priceless don’t make time your excuse. Book now!</p>
      <button class="mt-4 px-4 py-2 bg-T2 text-white rounded hover:bg-opacity-90">Book Now</button>
    </div>
  </section>

  <!-- Location -->
  <section class="py-10 text-center">
    <h2 class="text-[24px] font-semibold text-T2">See Where We're Located</h2>
    <div class="flex justify-center gap-6 mt-6 flex-wrap">
      <div class="bg-white p-4 rounded-lg shadow-md w-64">
        <img src="https://static.wixstatic.com/media/40fb91_e54e0dcb1c234f9b8dc2cc1897fd42ac~mv2.jpg/v1/fill/w_287,h_183,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/lobby_edited.jpg" class="rounded mb-2" />
        <p class="font-bold text-accent">Clinic A</p>
        <p class="text-sm text-gray-600">Jakarta, Indonesia</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md w-64">
        <img src="https://static.wixstatic.com/media/40fb91_5d75b18e85c64b4dbb50bda01ac9a5ec~mv2.jpg/v1/crop/x_0,y_1070,w_2592,h_1668/fill/w_283,h_179,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/facad%20fix.jpg" class="rounded mb-2" />
        <p class="font-bold text-accent">Clinic B</p>
        <p class="text-sm text-gray-600">Bandung, Indonesia</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md w-64">
        <img src="https://static.wixstatic.com/media/40fb91_5d75b18e85c64b4dbb50bda01ac9a5ec~mv2.jpg/v1/crop/x_0,y_1070,w_2592,h_1668/fill/w_283,h_179,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/facad%20fix.jpg" class="rounded mb-2" />
        <p class="font-bold text-accent">Clinic C</p>
        <p class="text-sm text-gray-600">Surabaya, Indonesia</p>
      </div>
    </div>
  </section>

@endsection