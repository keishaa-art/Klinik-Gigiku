<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin01',
            'email' => 'admin01@example.com',
            'password' => Hash::make('Admin123'),
            'nip' => 'ADM001',
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'Dokter Finda Fredina',
            'email' => 'dokterfindafredina@example.com',
            'password' => Hash::make('Dokter123'),
            'nip' => 'DOK001',
            'alamat' => 'Jl. Tentara Pelajar No. 12 E, Pekalangan Pekalipan,Cirebon Jawa Barat, 45118',
            'jenis_kelamin'=> 'Perempuan',
            'tgl_lahir' => '1990-05-15',
            'spesialis' => 'Dokter Umum',
            'no_telepon' => '081234567890',
            'role' => 'Dokter',
        ]);

        User::create([
            'name' => 'Farmasi',
            'email' => 'farmasi@example.com',
            'password' => Hash::make('Farmasi123'),
            'nip' => 'FAR001',
            'alamat' => 'Jl. Tentara Pelajar No. 12 E, Pekalangan Pekalipan,Cirebon Jawa Barat, 45118',
            'spesialis' => 'Apoteker',
            'no_telepon' => '082345678901',
            'role' => 'Farmasi',
        ]);
    }
}
