@extends('layouts.admin-layout')

@section('konten')



    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <h1 class="text-3xl font-bold mb-6">Selamat Datang, Admin!</h1>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Total Pengguna</p>
          <h2 class="text-2xl font-bold">1.240</h2>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Produk Aktif</p>
          <h2 class="text-2xl font-bold">152</h2>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Transaksi Hari Ini</p>
          <h2 class="text-2xl font-bold">85</h2>
        </div>
      </div>

      <!-- Table -->
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-xl font-bold mb-4">Data Terbaru</h2>
        <div class="overflow-x-auto">
          <table class="w-full text-left border border-gray-200">
            <thead class="bg-gray-100">
              <tr>
                <th class="p-2 border">#</th>
                <th class="p-2 border">Nama Produk</th>
                <th class="p-2 border">Kategori</th>
                <th class="p-2 border">Stok</th>
                <th class="p-2 border">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2 border">1</td>
                <td class="p-2 border">Basreng Pedas</td>
                <td class="p-2 border">Snack</td>
                <td class="p-2 border">20</td>
                <td class="p-2 border">Rp10.000</td>
              </tr>
              <tr>
                <td class="p-2 border">2</td>
                <td class="p-2 border">Seblak Prasmanan</td>
                <td class="p-2 border">Makanan</td>
                <td class="p-2 border">35</td>
                <td class="p-2 border">Rp15.000</td>
              </tr>
              <!-- Tambah data lainnya -->
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>


@endsection