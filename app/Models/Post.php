<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Daftar kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'isi',
        'user_id',
        'gambar',
        'views', // Tambahkan ini agar fitur counter pembaca aman
    ];

    // === RELASI ANTAR TABEL ===

    // 1. Relasi ke Komentar
    // (Satu Artikel punya Banyak Komentar)
    public function comments()
    {
        // Kita urutkan latest() agar komentar baru muncul di atas/bawah sesuai selera
        // Di sini saya setting default urut dari yang terbaru
        return $this->hasMany(Comment::class)->latest(); 
    }

    // 2. Relasi ke User/Admin
    // (Satu Artikel dimiliki oleh Satu Penulis)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}