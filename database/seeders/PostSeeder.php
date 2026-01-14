<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan Anda sudah meletakkan file gambar (event.jpg, dll) 
        // di folder: storage/app/public/posts/ SEBELUM menjalankan ini.

        $posts = [
            [
                'judul' => 'Sukses Gelar Workshop Kepemimpinan Pemuda 2026: Mencetak Generasi Emas',
                'slug' => 'sukses-gelar-workshop-kepemimpinan-pemuda-2026',
                'kategori' => 'Event',
                'isi' => '<p><strong>Tasikmalaya, 14 Januari 2026</strong> – Organisasi Kita kembali sukses menyelenggarakan acara tahunan terbesar, yaitu <em>Youth Leadership Workshop 2026</em>. Acara yang dihadiri oleh lebih dari 200 peserta ini berlangsung khidmat dan penuh antusiasme di Aula Utama Universitas.</p><p>Ketua Pelaksana, dalam sambutannya menyampaikan bahwa tujuan utama kegiatan ini adalah untuk melatih <em>soft skill</em> mahasiswa, terutama dalam hal <em>public speaking</em> dan manajemen tim.</p><h3>Rangkaian Kegiatan</h3><ul><li><strong>Sesi Materi:</strong> Diisi oleh pembicara nasional yang membahas tantangan Gen-Z.</li><li><strong>Focus Group Discussion (FGD):</strong> Peserta memecahkan masalah sosial secara berkelompok.</li><li><strong>Outbound:</strong> Sesi permainan untuk melatih kekompakan.</li></ul><p>"Kami berharap alumni dari workshop ini bisa menjadi agen perubahan di lingkungannya masing-masing," ujar Ketua Organisasi saat menutup acara.</p><p>Sampai jumpa di event seru kami berikutnya!</p>',
                
                // NAMA FILE HARUS SAMA PERSIS DENGAN YANG ANDA COPY
                'gambar' => 'posts/seminar.png', 
                
                'views' => 0,
                'created_at' => now(),
            ],
            [
                'judul' => 'Open Recruitment: Panggilan untuk Calon Pengurus Baru Batch 5',
                'slug' => 'open-recruitment-calon-pengurus-baru-batch-5',
                'kategori' => 'Pengumuman',
                'isi' => '<p>Apakah kamu mahasiswa aktif yang ingin mengembangkan diri? Punya semangat tinggi untuk berkontribusi bagi masyarakat? Ini saatnya kamu bergabung bersama keluarga besar <strong>Organisasi Kita</strong>!</p><p>Kami membuka kesempatan bagi kamu untuk bergabung di berbagai divisi:</p><ol><li><strong>Divisi Humas & Media:</strong> Cocok untuk kamu yang jago desain dan konten kreator.</li><li><strong>Divisi Sosial Masyarakat:</strong> Untuk kamu yang punya jiwa sosial tinggi terjun ke lapangan.</li><li><strong>Divisi PSDM:</strong> Fokus pada pengembangan internal anggota.</li></ol><h3>Timeline Pendaftaran</h3><ul><li><strong>Pendaftaran Online:</strong> 15 - 20 Januari 2026</li><li><strong>Wawancara:</strong> 22 Januari 2026</li><li><strong>Pengumuman:</strong> 25 Januari 2026</li></ul><p style="text-align: center;"><strong>Jangan lewatkan kesempatan ini!</strong><br>Daftarkan dirimu segera melalui link di bio Instagram kami atau hubungi narahubung di halaman Kontak.</p>',
                
                'gambar' => 'posts/pengumuman.png',

                'views' => 0,
                'created_at' => now()->subDays(1),
            ],
            [
                'judul' => 'Aksi Nyata: Penanaman 1.000 Pohon Bakau untuk Masa Depan Bumi',
                'slug' => 'aksi-nyata-penanaman-1000-pohon-bakau',
                'kategori' => 'Berita',
                'isi' => '<p>Krisis iklim bukan lagi isapan jempol semata. Merespons hal tersebut, <strong>Organisasi Kita</strong> berkolaborasi dengan komunitas pecinta alam lokal melakukan aksi penanaman 1.000 bibit pohon bakau di pesisir pantai selatan.</p><p>Kegiatan ini dilatarbelakangi oleh tingginya abrasi yang terjadi dalam 5 tahun terakhir. "Satu pohon yang kita tanam hari ini adalah napas untuk anak cucu kita di masa depan," ungkap Koordinator Lapangan.</p><h3>Dampak yang Diharapkan</h3><p>Selain menahan abrasi, hutan bakau baru ini diharapkan menjadi habitat bagi biota laut dan meningkatkan perekonomian warga sekitar melalui ekowisata.</p><p>Terima kasih kepada seluruh donatur dan relawan yang telah menyumbangkan tenaga serta materinya. Mari terus jaga bumi kita!</p>',
                
                'gambar' => 'posts/lingkungan.png',

                'views' => 0,
                'created_at' => now()->subDays(2),
            ],
            [
                'judul' => 'Membanggakan! Tim IT Organisasi Kita Sabet Juara 1 Lomba Web Design Nasional',
                'slug' => 'tim-it-organisasi-kita-juara-1-nasional',
                'kategori' => 'Berita',
                'isi' => '<p>Kabar gembira datang dari Divisi IPTEK. Delegasi <strong>Organisasi Kita</strong> berhasil meraih Juara 1 dalam kompetisi <em>National Web Design Competition 2025</em> yang diselenggarakan di Jakarta akhir pekan lalu.</p><p>Tim yang beranggotakan 3 orang ini membuat inovasi website edukasi berbasis AI untuk anak-anak putus sekolah. Juri menilai karya ini sangat berdampak dan memiliki <em>User Interface</em> yang sangat ramah pengguna.</p><blockquote><p>"Ini bukan akhir, tapi awal dari inovasi kami selanjutnya. Kemenangan ini untuk seluruh anggota organisasi yang selalu mendukung kami," ucap Ketua Tim.</p></blockquote><p>Semoga prestasi ini dapat memicu semangat anggota lain untuk terus berkarya dan berprestasi di bidangnya masing-masing. Hidup Mahasiswa!</p>',
                
                'gambar' => 'posts/prestasi.png',

                'views' => 0,
                'created_at' => now()->subDays(5),
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'judul' => $post['judul'],
                'slug' => $post['slug'],
                'kategori' => $post['kategori'],
                'isi' => $post['isi'],
                'gambar' => $post['gambar'],
                'views' => $post['views'],
                'user_id' => 1, // Pastikan ada User ID 1 (Admin)
                'created_at' => $post['created_at']
            ]);
        }
    }
}