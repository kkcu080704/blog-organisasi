<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    // 1. Halaman Depan (Daftar Berita)
    public function index(Request $request)
    {
        $search = $request->input('search');
        $kategori = $request->input('kategori'); // <--- 1. Tangkap input kategori

        $posts = Post::query()
            ->when($search, function($query, $search) {
                return $query->where('judul', 'like', "%{$search}%")
                             ->orWhere('isi', 'like', "%{$search}%");
            })
            // 2. Tambahkan logika Filter di sini
            ->when($kategori, function($query, $kategori) {
                return $query->where('kategori', $kategori);
            })
            ->latest()
            ->paginate(6)
            ->withQueryString(); // <--- 3. PENTING: Agar saat pindah halaman, filter tidak hilang

        return view('home', compact('posts', 'search')); // (Variabel kategori bisa diambil lgsg dr request di view)
    }

    // 2. Halaman Detail (Baca Berita Lengkap)
    public function show($slug)
    {
        // Cari berita berdasarkan SLUG, bukan ID (biar URL-nya cantik)
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->increment('views');
        $relatedPosts = Post::where('kategori', $post->kategori)
                            ->where('id', '!=', $post->id)
                            ->latest()
                            ->take(3)
                            ->get();
        return view('posts.show', compact('post', 'relatedPosts'));
    }
}