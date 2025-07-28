<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Klinik Gigiku</title>
  {{-- <link rel="icon" href="public/storage/image1.png" /> --}}
  <link rel="icon" href="{{ asset('storage/huntu.png') }}" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="script.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">
  <script src="tailwind.config.js"></script>

</head>
<body class="font-sans">

  <nav class="fixed top-0 w-full bg-gradient-to-r from-[#FFE6E1] to-[#F0BAAF] shadow-md z-50">
    <div class="max-w-[1200px] mx-auto px-4 py-3 flex items-center justify-between">
      <img src="{{ asset('storage/image1.png') }}" alt="Logo" class="h-10" />

      <button id="menuToggle" class="md:hidden text-[#C04C4C] focus:outline-none text-2xl">
        ☰
      </button>

      <div id="navLinks" class="hidden md:flex md:items-center md:space-x-8">
        <a href="#" class="text-[#C04C4C] font-semibold hover:text-[#a93d3d] transition">Home</a>
        <a href="#" class="text-[#C04C4C] font-semibold hover:text-[#a93d3d] transition">About</a>
        <a href="index.html" class="text-[#C04C4C] font-semibold hover:text-[#a93d3d] transition">Reservasi</a>
        <a href="#" class="text-[#C04C4C] font-semibold hover:text-[#a93d3d] transition">Navigasi</a>
        <button id="loginBtn" class="ml-4 bg-white text-[#C04C4C] font-semibold px-4 py-1 rounded-lg shadow hover:bg-[#FFE6E1] transition">
          Login
        </button>
        <img id="profilePic" src="https://i.pravatar.cc/30" alt="Profile" class="hidden w-8 h-8 rounded-full cursor-pointer ml-4" />
      </div>
    </div>

    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 space-y-3">
      <a href="#" class="block text-[#C04C4C] font-semibold">Home</a>
      <a href="#" class="block text-[#C04C4C] font-semibold">About</a>
      <a href="index.html" class="block text-[#C04C4C] font-semibold">Reservasi</a>
      <a href="#" class="block text-[#C04C4C] font-semibold">Navigasi</a>
      <button id="mobileLoginBtn" class="w-full bg-white text-[#C04C4C] font-semibold py-1 rounded-lg shadow hover:bg-[#FFE6E1] transition">
        Login
      </button>
      <div id="mobileProfile" class="hidden">
        <img src="https://i.pravatar.cc/30" alt="Profile" class="w-8 h-8 rounded-full" />
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="w-full bg-gradient-to-r from-[#FFE6E1] to-[#F0BAAF] shadow-md z-50 mt-[50px] p-8 min-h-[250px] background-color-[#F0BAAF]">
    <h1 class=" font-['Istok_Web'] font-semibold text-5xl mt-[40px] text-[#C04C4C] ">Gigiku Dental Clinic</h1>
    <h2 class="font-['Istok_Web'] font-semibold text-[#C04C4C]">JL. raden Kartini No.61/63
        <p>Kecamatan Kejaksan Kota Cirebon</p> 
        <p>Jawa Barat Indonesia</p> 
  </div>

  <div class="w-full mt-[2px] p-8">
      <h1 class="font-['Istok_Web'] font-semibold text-[#C04C4C] text-2xl">Pilih Dokter : </h1>
  </div>

<!-- ini Buat Pilih doctor Gigi -->
  <div class="max-w-6xl mx-auto px-4 py-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 place-items-center">

    <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

      <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=4" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
       <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>   
    </div>

     <div class="dokter-card bg-[#F0BAAF] rounded-xl shadow-lg p-10 text-center w-full max-w-[180px] transition ease-in-out duration-500 transform hover:scale-105">
      <img src="https://i.pravatar.cc/150?img=3" alt="Dokter" class="w-24 h-24 mx-auto rounded-xl mb-2">
      <h3 class="text-[#C04C4C] font-semibold">dr ayu sari</h3>
      <p class="text-gray-500 text-sm">Gigi Umum</p>
      <button onclick="pilihDokter(this)" class="mt-2 px-3 py-1 bg-[#C04C4C] text-white text-sm rounded hover:bg-[#a93d3d]">
        Pilih
      </button>
    </div>

  </div>
</div>

<!-- tombol selanjutnya -->
<div class="mt-8 flex justify-center">
  <a href="index2.html" id="btn-selanjutnya" class="w-[320px] mb-8 px-6 py-3 rounded-xl bg-gray-400 text-white text-lg text-center transition hover:opacity-80 cursor-not-allowed pointer-events-none">
    Selanjutnya
  </a>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const loginBtn = document.getElementById('loginBtn');
  const profilePic = document.getElementById('profilePic');
  const mobileLoginBtn = document.getElementById('mobileLoginBtn');
  const mobileProfile = document.getElementById('mobileProfile');

  let loggedIn = false;

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  function toggleLogin() {
    loggedIn = !loggedIn;
    loginBtn.classList.toggle('hidden', loggedIn);
    profilePic.classList.toggle('hidden', !loggedIn);
    mobileLoginBtn.classList.toggle('hidden', loggedIn);
    mobileProfile.classList.toggle('hidden', !loggedIn);
  }

  if (loginBtn) loginBtn.addEventListener('click', toggleLogin);
  if (mobileLoginBtn) mobileLoginBtn.addEventListener('click', toggleLogin);
});


function pilihDokter(button) {
  // Reset semua kartu ke warna default
  document.querySelectorAll('.dokter-card').forEach(card => {
    card.classList.remove('bg-green-200');
    card.classList.add('bg-[#F0BAAF]');
  });

  // Ubah kartu yang dipilih
  const card = button.closest('.dokter-card');
  card.classList.remove('bg-[#F0BAAF]');
  card.classList.add('bg-green-200');

  // Aktifkan tombol selanjutnya
  const btn = document.getElementById('btn-selanjutnya');
  btn.classList.remove('bg-gray-400', 'cursor-not-allowed', 'pointer-events-none');
  btn.classList.add('bg-[#C04C4C]', 'cursor-pointer');
}

</script>

</body>
</html>
