<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'japan.edu.kiseki@gmail.com'],
            [
                'name' => 'Admin Kiseki',
                'password' => \Illuminate\Support\Facades\Hash::make('kisekijapan#11'),
                'email_verified_at' => now(), // <-- Pastikan email sudah terverifikasi
            ]
        );

        \App\Models\Achievement::updateOrCreate(
            ['title' => 'Lulus N3 Terbanyak 2023'],
            [
                'year' => '2023',
                'description' => 'Mencetak rekor 150 siswa lulus JLPT N3 dalam satu angkatan.'
            ]
        );
        
        \App\Models\Achievement::updateOrCreate(
            ['title' => 'Lembaga Pengirim Magang Terbaik'],
            [
                'year' => '2024',
                'description' => 'Mendapatkan penghargaan dari kementerian sebagai LPK dengan performa pengiriman peserta magang terbaik.'
            ]
        );
    }
}
