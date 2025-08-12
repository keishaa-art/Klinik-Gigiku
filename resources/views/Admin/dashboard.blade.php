@extends('layouts.admin-layout')

@section('konten')



    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <h1 class="text-3xl font-bold mb-6">Selamat Datang, Admin!</h1>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Total Pasien</p>
          <h2 class="text-2xl font-bold">0</h2>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Total dokter</p>
          <h2 class="text-2xl font-bold">15</h2>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
          <p class="text-gray-500">Total pengunjung hari ini</p>
          <h2 class="text-2xl font-bold">12</h2>
        </div>
      </div>

      <!-- Table -->
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-xl font-bold mb-4">Data</h2>
        <div class="overflow-x-auto">
          <table class="w-full text-left border border-gray-200">
            <thead class="bg-gray-100">
            </thead>
          </table>
        </div>
      </div>
    </main>
  </div>


@endsection