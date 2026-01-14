<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Organisasi Kita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.9) 0%, rgba(13, 148, 136, 0.9) 100%), url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwMCIgaGVpZ2h0PSI2MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSA2MCAwIEwgMCAwIDAgNjAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .content-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }
        
        .vision-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-left: 4px solid #0ea5e9;
        }
        
        .mission-card {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border-left: 4px solid #22c55e;
        }
        
        .team-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e2e8f0;
        }
        
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: #cbd5e1;
        }
        
        .team-avatar {
            width: 120px;
            height: 120px;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .team-card:hover .team-avatar {
            transform: scale(1.05);
        }
        
        .role-badge {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
        }
        
        .stats-card {
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
            color: white;
            border-radius: 16px;
            overflow: hidden;
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1;
        }
        
        .stats-label {
            font-size: 0.875rem;
            opacity: 0.9;
        }
        
        .footer {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            margin-top: auto;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #0d9488;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 12px;
            width: 2px;
            height: calc(100% + 18px);
            background: #cbd5e1;
        }
        
        .timeline-item:last-child::after {
            display: none;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeInUp 0.6s ease;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .grid-cols-3 {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Navigation -->
    <nav class="navbar sticky top-0 z-50 py-4">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-teal-600 to-emerald-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-users text-white text-lg"></i>
                    </div>
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-teal-700 to-emerald-600 bg-clip-text text-transparent">
                        Organisasi Kita
                    </a>
                </div>
                
                <div class="hidden lg:flex space-x-8">
                    <a href="{{ route('home') }}" class="font-medium text-gray-700 hover:text-teal-600 transition-colors flex items-center">
                        <i class="fas fa-home mr-2"></i> Beranda
                    </a>
                    <a href="{{ route('about') }}" class="font-medium text-teal-600 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> Tentang Kami
                    </a>
                    <a href="{{ route('contact') }}" class="font-medium text-gray-700 hover:text-teal-600 transition-colors flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Kontak
                    </a>
                </div>
                
                <div>
                    @auth
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gradient-to-r from-teal-600 to-emerald-500 text-white rounded-lg font-medium hover:shadow-lg transition-all flex items-center">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 bg-gradient-to-r from-teal-600 to-emerald-500 text-white rounded-lg font-medium hover:shadow-lg transition-all flex items-center">
                            <i class="fas fa-sign-in-alt mr-2"></i> Login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero-section py-20 lg:py-28">
        <div class="container mx-auto px-4 lg:px-8 hero-content">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    Tentang Kami
                </h1>
                <p class="text-xl text-teal-100 mb-8 max-w-2xl mx-auto">
                    Mengenal lebih dekat siapa kami, visi misi, dan perjalanan organisasi
                </p>
                <div class="flex justify-center">
                    <a href="#our-story" class="px-6 py-3 bg-white text-teal-700 rounded-xl font-medium hover:shadow-xl transition-all transform hover:-translate-y-1 flex items-center gap-2">
                        <i class="fas fa-book-open"></i>
                        Jelajahi Cerita Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 lg:px-8 py-12 -mt-12 relative z-10">
        
        <!-- Our Story Section -->
        <div class="content-card p-8 lg:p-10 mb-12 fade-in" id="our-story">
            <div class="flex items-start mb-8">
                <div class="w-12 h-12 bg-gradient-to-br from-teal-50 to-emerald-100 rounded-xl flex items-center justify-center mr-4">
                    <i class="fas fa-history text-teal-600 text-xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Sejarah Singkat</h2>
                    <p class="text-gray-600">Perjalanan dan perkembangan organisasi kami</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <p class="text-gray-700 leading-relaxed text-lg mb-6">
                        Organisasi Kita didirikan pada tahun 2020 dengan semangat gotong royong dan kepedulian sosial. 
                        Berawal dari sekumpulan pemuda yang peduli terhadap lingkungan sekitar, kami berkomitmen untuk 
                        menciptakan perubahan positif di masyarakat.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Dalam perjalanannya, kami telah berkembang menjadi wadah aspirasi dan kreasi bagi ratusan 
                        anggota aktif dari berbagai latar belakang. Setiap tahun, kami terus berinovasi dan menciptakan 
                        program-program yang relevan dengan kebutuhan masyarakat.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-road mr-3 text-teal-600"></i>
                        Timeline Perkembangan
                    </h3>
                    <div class="space-y-6">
                        <div class="timeline-item">
                            <h4 class="font-bold text-gray-800 mb-1">2020 - Pendirian</h4>
                            <p class="text-gray-600 text-sm">Organisasi resmi berdiri dengan 30 anggota pertama</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-bold text-gray-800 mb-1">2021 - Ekspansi Program</h4>
                            <p class="text-gray-600 text-sm">Meluncurkan 5 program sosial dan pendidikan</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-bold text-gray-800 mb-1">2022 - Pertumbuhan Pesat</h4>
                            <p class="text-gray-600 text-sm">Anggota bertambah menjadi 200+ dan memperluas jaringan</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-bold text-gray-800 mb-1">2023 - Digitalisasi</h4>
                            <p class="text-gray-600 text-sm">Mengembangkan platform digital untuk komunikasi anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Vision & Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <div class="vision-card p-8 rounded-xl fade-in">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-eye text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Visi Kami</h2>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <p class="text-gray-700 text-lg italic leading-relaxed">
                        "Menjadi organisasi kepemudaan yang progresif, inklusif, dan berdampak nyata bagi masyarakat luas melalui inovasi dan kolaborasi."
                    </p>
                </div>
            </div>
            
            <div class="mission-card p-8 rounded-xl fade-in" style="animation-delay: 0.2s">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-bullseye text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Misi Kami</h2>
                    </div>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <span class="text-gray-700">Mengembangkan potensi anggota melalui pelatihan dan pengembangan kapasitas</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <span class="text-gray-700">Melaksanakan kegiatan sosial dan lingkungan secara berkala dan berkelanjutan</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <span class="text-gray-700">Membangun jejaring kerjasama dengan berbagai lembaga dan komunitas</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <span class="text-gray-700">Mendorong partisipasi aktif dalam pembangunan masyarakat</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Team Section -->
        <div class="text-center mb-12">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Struktur Pengurus Inti</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Tim pengurus yang berdedikasi memimpin organisasi menuju visi dan misi bersama
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="team-card p-8 fade-in">
                    <div class="flex flex-col items-center">
                        <div class="team-avatar rounded-full overflow-hidden mb-6">
                            <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=0d9488&color=fff&size=240&font-size=0.5&bold=true" 
                                 alt="Budi Santoso" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Budi Santoso</h3>
                        <div class="role-badge mb-4">KETUA UMUM</div>
                        <p class="text-gray-600 text-sm mb-4">
                            Memimpin organisasi sejak 2022 dengan fokus pada pengembangan program dan jaringan
                        </p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <a href="mailto:budi@organisasikita.com" class="text-gray-400 hover:text-teal-600 transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card p-8 fade-in" style="animation-delay: 0.1s">
                    <div class="flex flex-col items-center">
                        <div class="team-avatar rounded-full overflow-hidden mb-6">
                            <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=0d9488&color=fff&size=240&font-size=0.5&bold=true" 
                                 alt="Siti Aminah" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Siti Aminah</h3>
                        <div class="role-badge mb-4">SEKRETARIS</div>
                        <p class="text-gray-600 text-sm mb-4">
                            Mengelola administrasi dan dokumentasi organisasi dengan sistem yang terstruktur
                        </p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <a href="mailto:siti@organisasikita.com" class="text-gray-400 hover:text-teal-600 transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card p-8 fade-in" style="animation-delay: 0.2s">
                    <div class="flex flex-col items-center">
                        <div class="team-avatar rounded-full overflow-hidden mb-6">
                            <img src="https://ui-avatars.com/api/?name=Ahmad+Rizky&background=0d9488&color=fff&size=240&font-size=0.5&bold=true" 
                                 alt="Ahmad Rizky" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ahmad Rizky</h3>
                        <div class="role-badge mb-4">BENDAHARA</div>
                        <p class="text-gray-600 text-sm mb-4">
                            Mengelola keuangan dan anggaran organisasi dengan transparansi dan akuntabilitas
                        </p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <a href="mailto:ahmad@organisasikita.com" class="text-gray-400 hover:text-teal-600 transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="content-card p-8 lg:p-10 fade-in">
            <div class="flex items-start mb-8">
                <div class="w-12 h-12 bg-gradient-to-br from-teal-50 to-emerald-100 rounded-xl flex items-center justify-center mr-4">
                    <i class="fas fa-heart text-teal-600 text-xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Nilai-Nilai Kami</h2>
                    <p class="text-gray-600">Prinsip yang menjadi pedoman dalam setiap aktivitas kami</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Kolaborasi</h3>
                    <p class="text-gray-600 text-sm">Bekerja sama untuk mencapai tujuan bersama</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Inklusivitas</h3>
                    <p class="text-gray-600 text-sm">Terbuka untuk semua tanpa diskriminasi</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Inovasi</h3>
                    <p class="text-gray-600 text-sm">Terus berinovasi untuk solusi yang lebih baik</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Integritas</h3>
                    <p class="text-gray-600 text-sm">Bertindak dengan jujur dan bertanggung jawab</p>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="footer text-white mt-20">
        <div class="container mx-auto px-4 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-teal-500 to-emerald-400 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-white text-lg"></i>
                        </div>
                        <span class="text-2xl font-bold">Organisasi Kita</span>
                    </div>
                    <p class="text-gray-400">
                        Wadah bagi kemajuan dan pengembangan organisasi melalui informasi yang terpercaya dan aktual.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Bergabung Bersama Kami</h4>
                    <p class="text-gray-400 mb-4">
                        Ingin menjadi bagian dari perubahan? Bergabunglah dengan organisasi kami.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors">
                        <i class="fas fa-user-plus mr-2"></i>
                        Daftar Sekarang
                    </a>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2024 Organisasi Kita. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links
        document.querySelector('a[href="#our-story"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('our-story').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
        
        // Add animation to cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);
        
        // Observe content cards for animation
        document.querySelectorAll('.content-card, .team-card, .vision-card, .mission-card, .stats-card').forEach(card => {
            observer.observe(card);
        });
        
        // Add hover effect to team cards
        document.querySelectorAll('.team-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>