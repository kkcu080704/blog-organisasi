<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Panggil Model User
use Illuminate\Support\Facades\Hash; // Untuk enkripsi password

class AuthController extends Controller
{
    // === LOGIN (TIDAK BERUBAH) ===
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // === REGISTER (SUDAH DITAMBAHKAN VALIDASI TOKEN) ===
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 1. TENTUKAN KODE RAHASIA (Ganti sesuka hati Anda)
        $KODE_RAHASIA = 'INDONESIA2026'; 

        // 2. CEK KODE AKSES
        // Jika kode yang diinput (request->token) TIDAK SAMA dengan kunci rahasia
        if ($request->token !== $KODE_RAHASIA) {
            return back()
                ->withErrors(['token' => 'Kode Akses salah! Anda dilarang mendaftar.']) // Kirim pesan error
                ->withInput(); // Kembalikan isian nama/email agar tidak capek ngetik ulang
        }

        // 3. Validasi Input Data Diri
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Email tidak boleh kembar
            'password' => 'required|string|min:6|confirmed', // Password harus dikonfirmasi
        ]);

        // 4. Buat User Baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // 5. Arahkan ke Login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan Login.');
    }
}