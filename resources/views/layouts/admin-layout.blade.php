<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <!-- Sidebar -->
  <div class="flex h-screen">
    <aside class="w-64 bg-[#F0BAAF] flex flex-col">
      <div class="p-6 text-2xl font-bold border-b text-[#C75E5E] border-red-200">GIGIKU</div>
      <nav class="flex-1 p-4 space-y-4 text-[#A85050]">
        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-rose-300">Home</a>
       <div>
            <button onclick="toggleSubMenu()" 
                    class="w-full flex justify-between items-center px-3 py-2 rounded-lg bg-red-300 hover:bg-red-400 transition">
                <span>Admin</span>
                <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Sub menu -->
            <div id="subMenu" class="hidden ml-4 mt-2 space-y-2">
                <a href="{{ route('admin.pemeriksaan.index') }}" class="block px-3 py-2 rounded-lg hover:bg-red-100">Pemeriksaan</a>
                <a href="{{ route('admin.cabang.index') }}" class="block px-3 py-2 rounded-lg hover:bg-red-100">Cabang</a>
            </div>
        </div>
        <a href="#" class="block px-4 py-2 rounded hover:bg-rose-300">Dokter</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-rose-300">Pasien</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-rose-300">Farmasi</a>
      </nav>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="p-4 border-t border-red-200">
        <button class="w-full py-2 text-white bg-red-500 hover:bg-red-600 rounded" type="submit">Logout</button>
        </div>
    </form>
       
    </aside>


    @yield('konten')
</body>
<script>
    function toggleSubMenu() {
        let menu = document.getElementById("subMenu");
        let arrow = document.getElementById("arrowIcon");
        menu.classList.toggle("hidden");
        arrow.classList.toggle("rotate-180");
    }
</script>
</html>
