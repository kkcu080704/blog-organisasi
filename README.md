# Sistem Informasi Web Organisasi (Blog & Berita)

Aplikasi web berbasis Laravel untuk pengelolaan konten berita, kegiatan (event), dan pengumuman organisasi. Aplikasi ini memiliki fitur *Public View* untuk pengunjung dan *Admin Panel* untuk pengelolaan konten.

---

## 👨‍💻 Identitas Pengembang
* **Nama:** Ambiya Rayana Maulidan
* **NIM:** C2383207014
* **Kelas:** PTI 5A
* **Mata Kuliah:** Pemrograman Web Lanjut Internet

---

## 🚀 Fitur Utama

### 1. Halaman Publik (Pengunjung)
* **Beranda Responsif:** Menampilkan berita terbaru, event, dan pengumuman.
* **Detail Artikel:** Membaca isi berita lengkap dengan format teks rapi (Rich Text).
* **Fitur Komentar:** Pengunjung bisa memberikan komentar pada setiap artikel.
* **View Counter:** Penghitung jumlah pembaca otomatis (*Real-time Increment*).
* **Navigasi Kategori:** Filter artikel berdasarkan Event, Berita, atau Pengumuman.
* **Pagination:** Pembagian halaman jika artikel sudah banyak.

### 2. Panel Admin (Backend)
* **Autentikasi:** Sistem Login aman untuk administrator.
* **Dashboard:** Statistik ringkas (Total Artikel, Total Views, Jumlah Komentar).
* **CRUD Artikel:**
    * Tambah/Edit/Hapus artikel.
    * **TinyMCE Editor:** Penulisan konten dengan fitur Bold, Italic, List, dll.
    * **Image Upload:** Mendukung upload gambar thumbnail (disimpan di `public/storage`).
    * **Slug Otomatis:** URL artikel dibuat otomatis ramah SEO (SEO-friendly).
* **Manajemen Gambar:** Hapus gambar otomatis dari server saat artikel dihapus.

---

## 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel 12
* **Database:** MySQL
* **Bahasa:** PHP 8.1+
* **Frontend:** Blade Template + Tailwind CSS (CDN)
* **Library Tambahan:**
    * TinyMCE (Text Editor)
    * FontAwesome (Icons)

---

## ⚙️ Panduan Instalasi (Cara Menjalankan)

Ikuti langkah ini agar aplikasi berjalan dengan data dummy yang sudah disiapkan.

### 1. Clone & Setup Environment
Buka terminal di folder project:
```bash
# Copy file environment
cp .env.example .env
