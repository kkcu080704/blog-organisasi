<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // 1. DAFTAR ARTIKEL
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    // 2. FORM TULIS BARU
    public function create()
    {
        return view('posts.create');
    }

    // 3. SIMPAN ARTIKEL (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|min:5',
            'isi'     => 'required|min:10',
            // Gambar Opsional (Nullable) & Max 5MB
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', 
            'kategori'=> 'required'
        ]);

        // Siapkan data dasar
        $data = [
            'judul'     => $request->judul,
            'slug'      => Str::slug($request->judul, '-'),
            'isi'       => $request->isi,
            'kategori'  => $request->kategori,
            'user_id'   => Auth::id(),
            'views'     => 0
        ];

        // Cek jika ada gambar
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('posts', $image->hashName()); // Folder 'posts'
            $data['gambar'] = 'posts/' . $image->hashName();
        } else {
            $data['gambar'] = null;
        }

        Post::create($data);

        return redirect()->route('dashboard')->with('success', 'Artikel berhasil diterbitkan!');
    }

    // 4. FORM EDIT (YANG TADI HILANG)
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 5. UPDATE ARTIKEL
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'judul'   => 'required|min:5',
            'isi'     => 'required|min:10',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'kategori'=> 'required'
        ]);

        $data = [
            'judul'     => $request->judul,
            'slug'      => Str::slug($request->judul, '-'),
            'isi'       => $request->isi,
            'kategori'  => $request->kategori,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($post->gambar) {
                Storage::delete($post->gambar);
            }

            $image = $request->file('gambar');
            $image->storeAs('posts', $image->hashName());
            
            $data['gambar'] = 'posts/' . $image->hashName();
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    // 6. HAPUS ARTIKEL
    public function destroy(Post $post)
    {
        if ($post->gambar) {
            Storage::delete($post->gambar);
        }
        
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Artikel berhasil dihapus!');
    }
}