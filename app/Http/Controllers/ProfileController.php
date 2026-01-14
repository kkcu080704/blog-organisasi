<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    // 1. Tampilkan Halaman Pengaturan
    public function edit()
    {
        $user = Auth::user(); // Ambil data admin yang sedang login
        return view('profile.edit', compact('user'));
    }

    // 2. Proses Ganti Nama & Email
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            // Validasi email unik (kecuali milik user ini sendiri)
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Simpan perubahan
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

    // 3. Proses Ganti Password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password', // Cek password lama harus benar
            'password' => 'required|min:6|confirmed', // Password baru minimal 6 & harus sama dengan konfirmasi
        ]);

        // Update password di database (dienkripsi)
        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success_password', 'Password berhasil diganti!');
    }
}