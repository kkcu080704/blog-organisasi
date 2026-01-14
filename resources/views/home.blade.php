<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi Kita - Beranda</title>
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
        
        .category-filter {
            background: white;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .category-btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .category-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.15);
        }
        
        .category-btn.active {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
            color: white;
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.2);
        }
        
        .category-btn.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: white;
            border-radius: 2px;
        }
        
        .search-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .search-input {
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }
        
        .article-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e2e8f0;
            height: 100%;
        }
        
        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: #cbd5e1;
        }
        
        .article-image {
            height: 200px;
            position: relative;
            overflow: hidden;
        }
        
        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .article-card:hover .article-image img {
            transform: scale(1.05);
        }
        
        .category-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-berita {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
        }
        
        .badge-event {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            color: white;
        }
        
        .badge-pengumuman {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
        }
        
        .empty-state {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .empty-icon {
            font-size: 4rem;
            opacity: 0.2;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        
        .page-link {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .page-link:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }
        
        .page-link.active {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(13, 148, 136, 0.2);
        }
        
        .footer {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
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
            
            .category-filter {
                overflow-x: auto;
                padding-bottom: 8px;
            }
            
            .category-scroll {
                display: flex;
                gap: 8px;
                padding: 0 16px;
            }
            
            .article-card {
                max-width: 100%;
            }
            
            .article-image {
                height: 180px;
            }
        }
        
        @media (max-width: 640px) {
            .navbar .container {
                padding-left: 16px;
                padding-right: 16px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
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
                    <a href="{{ route('about') }}" class="font-medium text-gray-700 hover:text-teal-600 transition-colors flex items-center">
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
    <section class="hero-section py-24 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8 hero-content">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    Kabar Terbaru & Kegiatan
                </h1>
                <p class="text-xl text-teal-100 mb-8 max-w-2xl mx-auto">
                    Informasi terkini seputar aktivitas dan pengumuman organisasi
                </p>
                <div class="flex justify-center">
                    <a href="#articles" class="px-6 py-3 bg-white text-teal-700 rounded-xl font-medium hover:shadow-xl transition-all transform hover:-translate-y-1 flex items-center gap-2">
                        <i class="fas fa-arrow-down"></i>
                        Jelajahi Artikel
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 lg:px-8 py-12 -mt-12 relative z-10" id="articles">
        <!-- Category Filter -->
        <div class="category-filter rounded-2xl p-6 mb-8">
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('home') }}" 
                   class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300
                   {{ request('kategori') == null ? 'active' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Semua Kategori
                </a>
                
                <a href="{{ route('home', ['kategori' => 'Berita']) }}" 
                   class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300
                   {{ request('kategori') == 'Berita' ? 'active' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-newspaper mr-2"></i> Berita
                </a>

                <a href="{{ route('home', ['kategori' => 'Event']) }}" 
                   class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300
                   {{ request('kategori') == 'Event' ? 'active' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-calendar-alt mr-2"></i> Event
                </a>

                <a href="{{ route('home', ['kategori' => 'Pengumuman']) }}" 
                   class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300
                   {{ request('kategori') == 'Pengumuman' ? 'active' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-bullhorn mr-2"></i> Pengumuman
                </a>
            </div>
        </div>
        
        <!-- Search Box -->
        <div class="search-container p-2 mb-10">
            <form action="{{ route('home') }}" method="GET" class="relative">
                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif

                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input 
                        type="text" 
                        name="search" 
                        value="{{ request('search') }}" 
                        class="search-input w-full pl-12 pr-24 py-4 rounded-xl text-lg border-0 focus:ring-2 focus:ring-teal-500"
                        placeholder="Cari berita atau kegiatan..."
                    >
                    <div class="absolute inset-y-0 right-2 flex items-center">
                        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-teal-600 to-emerald-500 text-white rounded-lg font-medium hover:shadow-lg transition-all">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Articles Grid -->
        @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-12">
            @foreach($posts as $post)
            <div class="article-card fade-in" style="animation-delay: {{ $loop->index * 0.1 }}s">
                <!-- Article Image -->
                <div class="article-image">
                    @if($post->gambar)
                        <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}" loading="lazy">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center">
                            <i class="fas fa-newspaper text-teal-300 text-5xl"></i>
                        </div>
                    @endif
                    <div class="category-badge badge-{{ strtolower($post->kategori) }}">
                        {{ $post->kategori }}
                    </div>
                </div>
                
                <!-- Article Content -->
                <div class="p-6 flex flex-col h-full">
                    <div class="mb-4">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="far fa-calendar mr-2"></i>
                            <span>{{ $post->created_at->format('d M Y') }}</span>
                            <span class="mx-2">•</span>
                            <i class="far fa-eye mr-2"></i>
                            <span>{{ $post->views }}x dibaca</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 leading-snug hover:text-teal-600 transition-colors">
                            <a href="{{ route('public.show', $post->slug) }}">
                                {{ $post->judul }}
                            </a>
                        </h3>
                        
                        <p class="text-gray-600 line-clamp-3 mb-6">
                            {{ Str::limit(strip_tags($post->isi), 120) }}
                        </p>
                    </div>
                    
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <a href="{{ route('public.show', $post->slug) }}" class="flex items-center justify-between group">
                            <span class="text-teal-600 font-medium group-hover:text-teal-800 transition-colors">
                                Baca Selengkapnya
                            </span>
                            <i class="fas fa-arrow-right text-teal-600 group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="empty-state p-12 text-center mb-12">
            <div class="mb-6">
                <i class="fas fa-newspaper empty-icon text-gray-400"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 mb-4">
                @if(request('search') && request('kategori'))
                    Tidak ditemukan artikel untuk kategori "<span class="text-teal-600">{{ request('kategori') }}</span>" dengan kata kunci "<span class="text-teal-600">{{ request('search') }}</span>"
                @elseif(request('search'))
                    Tidak ditemukan artikel dengan kata kunci "<span class="text-teal-600">{{ request('search') }}</span>"
                @elseif(request('kategori'))
                    Belum ada artikel untuk kategori "<span class="text-teal-600">{{ request('kategori') }}</span>"
                @else
                    Belum ada berita yang diterbitkan
                @endif
            </h3>
            <p class="text-gray-600 mb-8 max-w-md mx-auto">
                @if(request('search') || request('kategori'))
                    Coba cari dengan kata kunci lain atau pilih kategori berbeda
                @else
                    Nantikan informasi terbaru dari organisasi kami
                @endif
            </p>
            @if(request('search') || request('kategori'))
                <a href="{{ route('home') }}" class="px-6 py-3 bg-gradient-to-r from-teal-600 to-emerald-500 text-white rounded-lg font-medium hover:shadow-lg transition-all inline-flex items-center gap-2">
                    <i class="fas fa-redo"></i>
                    Reset Filter
                </a>
            @endif
        </div>
        @endif
        
        <!-- Pagination -->
        @if($posts->hasPages())
        <div class="mt-12">
            <div class="pagination">
                <!-- Previous Page Link -->
                @if($posts->onFirstPage())
                    <span class="page-link text-gray-400 cursor-not-allowed">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                @else
                    <a href="{{ $posts->previousPageUrl() }}" class="page-link text-gray-700 hover:text-teal-600">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                @endif
                
                <!-- Page Numbers -->
                @foreach(range(1, $posts->lastPage()) as $page)
                    @if($page == $posts->currentPage())
                        <span class="page-link active">{{ $page }}</span>
                    @else
                        <a href="{{ $posts->url($page) }}" class="page-link text-gray-700 hover:text-teal-600">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
                
                <!-- Next Page Link -->
                @if($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}" class="page-link text-gray-700 hover:text-teal-600">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                @else
                    <span class="page-link text-gray-400 cursor-not-allowed">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                @endif
            </div>
        </div>
        @endif
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
                    <p class="text-gray-400 mb-6">
                        Wadah bagi kemajuan dan pengembangan organisasi melalui informasi yang terpercaya dan aktual.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Menu Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Kategori Populer</h4>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ route('home', ['kategori' => 'Berita']) }}" class="px-3 py-1.5 bg-gray-800 text-gray-300 rounded-full text-sm hover:bg-gray-700 transition-colors">
                            Berita
                        </a>
                        <a href="{{ route('home', ['kategori' => 'Event']) }}" class="px-3 py-1.5 bg-gray-800 text-gray-300 rounded-full text-sm hover:bg-gray-700 transition-colors">
                            Event
                        </a>
                        <a href="{{ route('home', ['kategori' => 'Pengumuman']) }}" class="px-3 py-1.5 bg-gray-800 text-gray-300 rounded-full text-sm hover:bg-gray-700 transition-colors">
                            Pengumuman
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2024 Organisasi Kita. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll to articles
        document.querySelector('a[href="#articles"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('articles').scrollIntoView({
                behavior: 'smooth'
            });
        });
        
        // Add animation to article cards
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
        
        // Observe article cards for animation
        document.querySelectorAll('.article-card').forEach(card => {
            observer.observe(card);
        });
        
        // Add hover effect to category buttons
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    this.style.transform = 'translateY(-2px)';
                }
            });
            
            btn.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });
        
        // Auto-focus search input on category change
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(() => {
                    document.querySelector('input[name="search"]').focus();
                }, 300);
            });
        });
    </script>
</body>
</html>