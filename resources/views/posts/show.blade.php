<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->judul }} - Organisasi Kita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
        }
        
        .article-content p, .article-content ul, .article-content ol {
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }
        
        .article-content h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 2rem 0 1rem;
            color: #1e293b;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1.5rem 0 1rem;
            color: #334155;
        }
        
        .article-content img {
            border-radius: 12px;
            margin: 2rem 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .article-content blockquote {
            border-left: 4px solid #0d9488;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #475569;
            background: #f8fafc;
            padding: 1.5rem;
            border-radius: 0 8px 8px 0;
        }
        
        .article-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .article-content table th {
            background: #0f766e;
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }
        
        .article-content table td {
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .article-content table tr:hover {
            background: #f8fafc;
        }
        
        .sticky-nav {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.9) 0%, rgba(13, 148, 136, 0.9) 100%);
        }
        
        .category-badge {
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
        }
        
        .comment-avatar {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
        }
        
        .related-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e2e8f0;
        }
        
        .related-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #cbd5e1;
        }
        
        .success-toast {
            animation: slideDown 0.5s ease;
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .share-btn {
            transition: all 0.3s;
        }
        
        .share-btn:hover {
            transform: scale(1.1);
        }
        
        .scroll-progress {
            height: 4px;
            background: linear-gradient(to right, #0f766e, #14b8a6);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 0%;
            transition: width 0.3s;
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Navigation -->
    <nav class="sticky-nav sticky top-0 z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-teal-600 to-emerald-500 rounded-lg flex items-center justify-center">
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

    <!-- Hero Header -->
    <header class="relative overflow-hidden">
        @if($post->gambar)
            <div class="absolute inset-0">
                <img src="{{ asset('storage/' . $post->gambar) }}" 
                     class="w-full h-full object-cover" 
                     alt="{{ $post->judul }}"
                     loading="eager">
                <div class="absolute inset-0 hero-gradient"></div>
            </div>
        @else
            <div class="absolute inset-0 bg-gradient-to-br from-teal-700 to-emerald-600"></div>
        @endif
        
        <div class="relative container mx-auto px-4 lg:px-8 py-24 lg:py-32">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <div class="inline-flex items-center space-x-2 mb-6">
                    <span class="category-badge text-white px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-wider">
                        {{ $post->kategori }}
                    </span>
                    <span class="text-white/80 text-sm">
                        <i class="far fa-clock mr-1"></i> {{ $post->created_at->format('d M Y') }}
                    </span>
                </div>
                
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    {{ $post->judul }}
                </h1>
                
                <div class="flex flex-wrap justify-center items-center gap-4 text-white/90">
                    <div class="flex items-center">
                        <i class="far fa-eye mr-2"></i>
                        <span>{{ $post->views }}x Dibaca</span>
                    </div>
                    <div class="h-4 w-px bg-white/40"></div>
                    <div class="flex items-center">
                        <i class="far fa-comment mr-2"></i>
                        <span>{{ $post->comments->count() }} Komentar</span>
                    </div>
                    <div class="h-4 w-px bg-white/40"></div>
                    <div class="flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Curved bottom -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 50C480 40 600 50 720 60C840 70 960 80 1080 75C1200 70 1320 50 1380 40L1440 30V120H0Z" fill="#f8fafc"/>
            </svg>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative -mt-1">
        <div class="container mx-auto px-4 lg:px-8 py-12">
            <div class="max-w-4xl mx-auto">
                
                <!-- Article Content -->
                <div class="bg-white rounded-2xl shadow-xl p-6 lg:p-10 mb-12">
                    <article class="article-content fade-in">
                        {!! $post->isi !!}
                    </article>
                    
                    <!-- Tags -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-gray-600 font-medium mr-3">Tags:</span>
                            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-full text-sm">Organisasi</span>
                            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-full text-sm">{{ $post->kategori }}</span>
                            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-full text-sm">Berita</span>
                        </div>
                    </div>
                </div>

                <!-- Related Posts -->
                @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-r from-teal-600 to-emerald-500 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-newspaper text-white text-sm"></i>
                        </div>
                        Baca Juga Kabar Lainnya
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($relatedPosts as $related)
                        <a href="{{ route('public.show', $related->slug) }}" class="related-card bg-white rounded-xl overflow-hidden">
                            <div class="h-48 overflow-hidden">
                                @if($related->gambar)
                                    <img src="{{ asset('storage/' . $related->gambar) }}" 
                                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                         alt="{{ $related->judul }}">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-teal-400 text-3xl"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="p-5">
                                <div class="flex justify-between items-start mb-3">
                                    <span class="px-3 py-1 bg-teal-50 text-teal-700 text-xs font-bold rounded-full">
                                        {{ $related->kategori }}
                                    </span>
                                    <span class="text-xs text-gray-500">{{ $related->created_at->format('d M') }}</span>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg leading-snug hover:text-teal-600 transition-colors">
                                    {{ Str::limit($related->judul, 50) }}
                                </h4>
                                <div class="mt-4 flex items-center text-sm text-gray-500">
                                    <i class="far fa-eye mr-1"></i>
                                    <span>{{ $related->views }}x</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Comments Section -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="p-6 lg:p-10">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 flex items-center">
                                <i class="far fa-comments text-teal-600 text-2xl mr-3"></i>
                                Komentar ({{ $post->comments->count() }})
                            </h3>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-sort mr-1"></i> Terbaru
                            </div>
                        </div>

                        <!-- Comments List -->
                        <div class="space-y-8 mb-10">
                            @forelse($post->comments as $comment)
                            <div class="flex gap-4 pb-6 border-b border-gray-100 last:border-0 last:pb-0">
                                <div class="flex-shrink-0">
                                    <div class="comment-avatar w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                        {{ substr($comment->nama, 0, 1) }}
                                    </div>
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h5 class="font-bold text-gray-800">{{ $comment->nama }}</h5>
                                            @if($comment->email)
                                            <p class="text-xs text-gray-500">{{ $comment->email }}</p>
                                            @endif
                                        </div>
                                        <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-gray-700">{{ $comment->isi }}</p>
                                    <div class="mt-3 flex space-x-4">
                                        <button class="text-xs text-gray-500 hover:text-teal-600 transition-colors">
                                            <i class="far fa-thumbs-up mr-1"></i> Suka
                                        </button>
                                        <button class="text-xs text-gray-500 hover:text-teal-600 transition-colors">
                                            <i class="fas fa-reply mr-1"></i> Balas
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center py-12">
                                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="far fa-comment text-gray-400 text-2xl"></i>
                                </div>
                                <h4 class="text-lg font-bold text-gray-700 mb-2">Belum ada komentar</h4>
                                <p class="text-gray-500 max-w-md mx-auto">
                                    Jadilah yang pertama memberikan tanggapan dan memulai diskusi!
                                </p>
                            </div>
                            @endforelse
                        </div>

                        <!-- Comment Form -->
                        <div class="bg-gradient-to-br from-gray-50 to-white p-6 lg:p-8 rounded-xl border border-gray-200">
                            <h4 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-pen text-teal-600 text-xl mr-3"></i>
                                Tambah Komentar
                            </h4>
                            
                            @if(session('success'))
                            <div class="success-toast bg-gradient-to-r from-teal-50 to-emerald-50 border border-teal-200 text-teal-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                                <i class="fas fa-check-circle text-teal-600 text-lg mr-3"></i>
                                <div>
                                    <p class="font-medium">Komentar berhasil dikirim!</p>
                                    <p class="text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                            @endif

                            <form action="{{ route('comments.store') }}" method="POST" id="commentForm">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">
                                            Nama Anda <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                            <input type="text" name="nama" 
                                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition"
                                                   required 
                                                   placeholder="Masukkan nama Anda">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">
                                            Email (Opsional)
                                        </label>
                                        <div class="relative">
                                            <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                            <input type="email" name="email" 
                                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition"
                                                   placeholder="email@contoh.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-medium mb-2">
                                        Komentar Anda <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-comment absolute left-4 top-4 text-gray-400"></i>
                                        <textarea name="isi" rows="4" 
                                                  class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition resize-none"
                                                  required 
                                                  placeholder="Tulis komentar Anda di sini..."></textarea>
                                    </div>
                                    <p class="text-sm text-gray-500 mt-2">
                                        Komentar akan muncul setelah disetujui oleh admin.
                                    </p>
                                </div>

                                <button type="submit" 
                                        class="bg-gradient-to-r from-teal-600 to-emerald-500 text-white font-medium py-3 px-8 rounded-lg hover:shadow-lg transition-all flex items-center justify-center w-full lg:w-auto">
                                    <i class="fas fa-paper-plane mr-2"></i> Kirim Komentar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white mt-20">
        <div class="container mx-auto px-4 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
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
                    <h4 class="text-lg font-bold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <span>Jl. Organisasi No. 123, Jakarta</span>
                        </div>
                        <div class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@organisasi-kita.id</span>
                        </div>
                        <div class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-3"></i>
                            <span>(021) 1234-5678</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2024 Organisasi Kita. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll Progress Bar
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollPercentage = (scrollTop / scrollHeight) * 100;
            document.getElementById('scrollProgress').style.width = `${scrollPercentage}%`;
        });
        
        // Copy link functionality
        document.querySelectorAll('.share-btn').forEach(btn => {
            if (btn.textContent.includes('Copy Link')) {
                btn.addEventListener('click', () => {
                    navigator.clipboard.writeText(window.location.href).then(() => {
                        const originalText = btn.innerHTML;
                        btn.innerHTML = '<i class="fas fa-check mr-2"></i> Copied!';
                        btn.classList.add('bg-green-600');
                        setTimeout(() => {
                            btn.innerHTML = originalText;
                            btn.classList.remove('bg-green-600');
                        }, 2000);
                    });
                });
            }
        });
        
        // Form submission
        document.getElementById('commentForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
            submitBtn.disabled = true;
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Initialize animations
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
        
        // Observe elements for animation
        document.querySelectorAll('.related-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>