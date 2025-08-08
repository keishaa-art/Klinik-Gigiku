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
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
      <div class="p-6 text-2xl font-bold border-b border-gray-700">GIGIKU</div>
      <nav class="flex-1 p-4 space-y-4">
        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">🛠 Admin</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">🩺 Dokter</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">❤ Pasien</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">💊 Farmasi</a>
      </nav>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="p-4 border-t border-gray-700">
        <button class="w-full py-2 bg-red-500 hover:bg-red-600 rounded" type="submit">Logout</button>
        </div>
    </form>
       
    </aside>


    @yield('konten')
</body>
</html>
