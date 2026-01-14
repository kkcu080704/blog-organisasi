<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan baris ini ada

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun Admin Dulu (Wajib ada biar artikel punya pemilik)
        User::create([
            'name' => 'Admin Organisasi',
            'email' => 'admin@gmail.com', // Email Login
            'password' => bcrypt('password'), // Password Login
        ]);

        // 2. Panggil PostSeeder yang sudah kita buat tadi
        $this->call([
            PostSeeder::class,
        ]);
    }
}