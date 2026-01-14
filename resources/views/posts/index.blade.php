<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Artikel - Sistem Organisasi</title>
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
            margin: 0;
            padding: 20px;
        }
        
        .management-container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .management-header {
            background: linear-gradient(to right, #0f766e, #14b8a6);
            color: white;
            padding: 28px 32px;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .header-text h1 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0 0 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .header-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }
        
        .header-text p {
            font-size: 1rem;
            opacity: 0.9;
            margin: 0;
            max-width: 500px;
        }
        
        .header-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }
        
        .btn-back {
            background: rgba(255, 255, 255, 0.15);
            color: white;
        }
        
        .btn-back:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }
        
        .btn-new {
            background: white;
            color: #0f766e;
            font-weight: 600;
        }
        
        .btn-new:hover {
            background: #f0fdf4;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .alert-success {
            background: linear-gradient(to right, #d1fae5, #bbf7d0);
            border-left: 4px solid #10b981;
            color: #065f46;
            padding: 18px 24px;
            border-radius: 10px;
            margin: 24px 32px;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideIn 0.5s ease;
        }
        
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .alert-icon {
            font-size: 1.2rem;
        }
        
        .alert-content h3 {
            font-weight: 700;
            margin: 0 0 4px;
            font-size: 1.05rem;
        }
        
        .alert-content p {
            margin: 0;
            font-size: 0.95rem;
        }
        
        .articles-container {
            padding: 0 32px 32px;
        }
        
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }
        
        .article-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #cbd5e1;
        }
        
        .article-image {
            height: 180px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .article-card:hover .article-image img {
            transform: scale(1.05);
        }
        
        .no-image {
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
        }
        
        .no-image i {
            font-size: 2.5rem;
            opacity: 0.5;
        }
        
        .article-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .article-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }
        
        .article-category {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .category-berita {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .category-event {
            background: #f3e8ff;
            color: #6b21a8;
        }
        
        .category-pengumuman {
            background: #ffedd5;
            color: #9a3412;
        }
        
        .article-date {
            font-size: 0.85rem;
            color: #64748b;
            white-space: nowrap;
        }
        
        .article-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0 0 12px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .article-excerpt {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .article-actions {
            display: flex;
            gap: 10px;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
        }
        
        .action-btn {
            flex: 1;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            transition: all 0.2s;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        
        .btn-edit {
            background: #e0f2fe;
            color: #0369a1;
            border: 1px solid #bae6fd;
        }
        
        .btn-edit:hover {
            background: #bae6fd;
        }
        
        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }
        
        .btn-delete:hover {
            background: #fecaca;
        }
        
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
        }
        
        .empty-icon {
            font-size: 3.5rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }
        
        .empty-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 12px;
        }
        
        .empty-text {
            color: #94a3b8;
            max-width: 400px;
            margin: 0 auto 30px;
        }
        
        @media (max-width: 1024px) {
            .articles-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            
            .management-header, .articles-container {
                padding-left: 24px;
                padding-right: 24px;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .management-header {
                padding: 24px 20px;
            }
            
            .header-content {
                flex-direction: column;
            }
            
            .header-actions {
                width: 100%;
                justify-content: stretch;
            }
            
            .btn {
                flex: 1;
                justify-content: center;
            }
            
            .articles-container {
                padding: 0 20px 24px;
            }
            
            .articles-grid {
                grid-template-columns: 1fr;
            }
            
            .alert-success {
                margin: 20px;
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .header-text h1 {
                font-size: 1.6rem;
            }
            
            .header-icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
            
            .article-card {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="management-container">
        <!-- Header -->
        <div class="management-header">
            <div class="header-content">
                <div class="header-text">
                    <h1>
                        <div class="header-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        Manajemen Artikel
                    </h1>
                    <p>Kelola semua berita, event, dan pengumuman organisasi di satu tempat</p>
                </div>
                
                <div class="header-actions">
                    <a href="{{ route('dashboard') }}" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Dashboard
                    </a>
                    <a href="{{ route('posts.create') }}" class="btn btn-new">
                        <i class="fas fa-plus"></i>
                        Tulis Artikel Baru
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Success Message -->
        @if(session('success'))
        <div class="alert-success">
            <i class="fas fa-check-circle alert-icon"></i>
            <div class="alert-content">
                <h3>Berhasil!</h3>
                <p>{{ session('success') }}</p>
            </div>
        </div>
        @endif
        
        <!-- Articles Grid -->
        <div class="articles-container">
            @if($posts->count() > 0)
            <div class="articles-grid">
                @foreach($posts as $post)
                <div class="article-card">
                    <!-- Article Image -->
                    <div class="article-image">
                        @if($post->gambar)
                            <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}">
                        @else
                            <div class="no-image">
                                <i class="far fa-newspaper"></i>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Article Content -->
                    <div class="article-content">
                        <div class="article-header">
                            <span class="article-category category-{{ strtolower($post->kategori) }}">
                                {{ $post->kategori }}
                            </span>
                            <span class="article-date">
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                        </div>
                        
                        <h3 class="article-title">{{ $post->judul }}</h3>
                        
                        <p class="article-excerpt">
                            {{ Str::limit(strip_tags($post->isi), 120) }}
                        </p>
                        
                        <!-- Article Actions -->
                        <div class="article-actions">
                            <a href="{{ route('posts.edit', $post->id) }}" class="action-btn btn-edit">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="w-full" 
                                  onsubmit="return confirm('Yakin ingin menghapus artikel ini? Data akan hilang selamanya.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete w-full">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="far fa-newspaper"></i>
                </div>
                <h3 class="empty-title">Belum Ada Artikel</h3>
                <p class="empty-text">Mulai bagikan informasi terbaru organisasi dengan membuat artikel pertama Anda.</p>
                <a href="{{ route('posts.create') }}" class="btn btn-new" style="display: inline-flex; width: auto;">
                    <i class="fas fa-plus"></i>
                    Tulis Artikel Pertama
                </a>
            </div>
            @endif
        </div>
    </div>

    <script>
        // Confirmation for delete with better UI
        document.querySelectorAll('form[onsubmit]').forEach(form => {
            form.onsubmit = function(e) {
                e.preventDefault();
                
                // Custom confirmation dialog
                if(confirm('Yakin ingin menghapus artikel ini?\nData akan hilang selamanya dan tidak dapat dikembalikan.')) {
                    this.submit();
                }
            };
        });
        
        // Add hover effects to buttons
        document.querySelectorAll('.action-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Auto-hide success message after 5 seconds
        @if(session('success'))
        setTimeout(() => {
            const alert = document.querySelector('.alert-success');
            if(alert) {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => {
                    if(alert.parentNode) {
                        alert.parentNode.removeChild(alert);
                    }
                }, 500);
            }
        }, 5000);
        @endif
    </script>
</body>
</html>