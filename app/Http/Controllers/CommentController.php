<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'nama' => 'required|string|max:50',
            'isi' => 'required|string',
        ]);

        // Simpan ke database
        Comment::create([
            'post_id' => $request->post_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->isi,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }
}