<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sistem Organisasi</title>
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
        
        .dashboard-container {
            display: grid;
            grid-template-columns: 280px 1fr;
            min-height: 100vh;
        }
        
        .sidebar {
            background: linear-gradient(180deg, #0f766e 0%, #115e59 100%);
            box-shadow: 5px 0 20px rgba(15, 118, 110, 0.1);
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }
        
        .sidebar-header {
            padding: 28px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        .logo-text {
            font-weight: 700;
            font-size: 1.25rem;
            background: linear-gradient(135deg, #ffffff 0%, #e0f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 20px;
            margin: 0 12px 4px;
            border-radius: 10px;
            color: rgba(255, 255, 255, 0.85);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(5px);
        }
        
        .nav-item.active {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            font-weight: 500;
        }
        
        .nav-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: #14b8a6;
        }
        
        .nav-item i {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }
        
        .website-btn {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 20px 12px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .website-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(20, 184, 166, 0.3);
        }
        
        .main-content {
            padding: 20px;
            overflow-y: auto;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }
        
        .top-bar {
            background: white;
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        
        .welcome-section h1 {
            font-size: 1.875rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .welcome-section p {
            color: #64748b;
            font-size: 0.95rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .user-avatar {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: white;
            font-size: 18px;
        }
        
        .user-text {
            text-align: right;
        }
        
        .user-name {
            font-weight: 600;
            color: #1e293b;
        }
        
        .user-role {
            font-size: 0.875rem;
            color: #64748b;
        }
        
        .logout-btn {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(239, 68, 68, 0.2);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }
        
        .card-articles::before {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
        }
        
        .card-views::before {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
        
        .card-comments::before {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }
        
        .stat-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            font-size: 24px;
        }
        
        .icon-articles {
            background: linear-gradient(135deg, rgba(13, 148, 136, 0.1) 0%, rgba(20, 184, 166, 0.1) 100%);
            color: #0d9488;
        }
        
        .icon-views {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(29, 78, 216, 0.1) 100%);
            color: #3b82f6;
        }
        
        .icon-comments {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.1) 100%);
            color: #f59e0b;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1;
            margin-bottom: 8px;
        }
        
        .stat-label {
            color: #64748b;
            font-size: 0.95rem;
            font-weight: 500;
        }
        
        .quick-actions {
            background: white;
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .section-title i {
            color: #0d9488;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #1e293b;
        }
        
        .action-btn:hover {
            background: white;
            border-color: #0d9488;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.1);
        }
        
        .action-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .action-articles {
            background: linear-gradient(135deg, rgba(13, 148, 136, 0.1) 0%, rgba(20, 184, 166, 0.1) 100%);
            color: #0d9488;
        }
        
        .action-edit {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
            color: #8b5cf6;
        }
        
        .action-settings {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.1) 100%);
            color: #f59e0b;
        }
        
        .action-text {
            flex-grow: 1;
        }
        
        .action-title {
            font-weight: 600;
            font-size: 1.05rem;
            margin-bottom: 4px;
        }
        
        .action-desc {
            color: #64748b;
            font-size: 0.875rem;
        }
        
        .action-arrow {
            color: #94a3b8;
            transition: transform 0.3s ease;
        }
        
        .action-btn:hover .action-arrow {
            transform: translateX(5px);
            color: #0d9488;
        }
        
        @media (max-width: 1024px) {
            .dashboard-container {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                position: fixed;
                left: -100%;
                top: 0;
                z-index: 1000;
                width: 280px;
                transition: left 0.3s ease;
            }
            
            .sidebar.active {
                left: 0;
            }
            
            .sidebar-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 999;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            
            .sidebar-overlay.active {
                opacity: 1;
                visibility: visible;
            }
            
            .mobile-menu-btn {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                z-index: 100;
                background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
                color: white;
                width: 48px;
                height: 48px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                box-shadow: 0 4px 12px rgba(13, 148, 136, 0.3);
            }
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 16px;
            }
            
            .top-bar {
                flex-direction: column;
                gap: 16px;
                align-items: stretch;
                text-align: center;
            }
            
            .user-info {
                justify-content: center;
            }
            
            .user-text {
                text-align: center;
            }
            
            .welcome-section h1 {
                justify-content: center;
                font-size: 1.5rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn hidden lg:hidden" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
    </button>
    
    <!-- Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="logo-text">Admin Panel</div>
                </div>
            </div>
            
            <nav class="py-6">
                <a href="{{ route('home') }}" target="_blank" class="website-btn">
                    <i class="fas fa-external-link-alt"></i>
                    Lihat Website
                </a>
                
                <div class="px-4 py-2">
                    <div class="nav-item active">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </div>
                    
                    <a href="{{ route('posts.index') }}" class="nav-item">
                        <i class="fas fa-newspaper"></i>
                        <span>Manajemen Artikel</span>
                    </a>
                    
                    <a href="{{ route('profile.edit') }}" class="nav-item">
                        <i class="fas fa-user-cog"></i>
                        <span>Pengaturan Akun</span>
                    </a>
                </div>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <div class="top-bar">
                <div class="welcome-section">
                    <h1>
                        <i class="fas fa-tachometer-alt text-teal-600"></i>
                        Selamat Datang, Admin!
                    </h1>
                    <p>Pusat kontrol dan manajemen website organisasi</p>
                </div>
                
                <div class="user-info">
                    <div class="user-avatar">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="user-text">
                        <div class="user-name">{{ Auth::user()->name }}</div>
                        <div class="user-role">Administrator</div>
                    </div>
                    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class="stats-grid">
                <div class="stat-card card-articles">
                    <div class="stat-icon icon-articles">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-number">{{ $totalArticles }}</div>
                    <div class="stat-label">Total Artikel</div>
                </div>
                
                <div class="stat-card card-views">
                    <div class="stat-icon icon-views">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="stat-number">{{ $totalViews }}</div>
                    <div class="stat-label">Total Dibaca</div>
                </div>
                
                <div class="stat-card card-comments">
                    <div class="stat-icon icon-comments">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="stat-number">{{ $totalComments }}</div>
                    <div class="stat-label">Komentar Masuk</div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="quick-actions">
                <h2 class="section-title">
                    <i class="fas fa-bolt"></i>
                    Aksi Cepat
                </h2>
                
                <div class="actions-grid">
                    <a href="{{ route('posts.create') }}" class="action-btn">
                        <div class="action-icon action-articles">
                            <i class="fas fa-pen"></i>
                        </div>
                        <div class="action-text">
                            <div class="action-title">Tulis Artikel Baru</div>
                            <div class="action-desc">Buat berita atau pengumuman terbaru</div>
                        </div>
                        <div class="action-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                    
                    <a href="{{ route('posts.index') }}" class="action-btn">
                        <div class="action-icon action-edit">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div class="action-text">
                            <div class="action-title">Kelola Artikel</div>
                            <div class="action-desc">Edit atau hapus artikel yang ada</div>
                        </div>
                        <div class="action-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                    
                    <a href="{{ route('profile.edit') }}" class="action-btn">
                        <div class="action-icon action-settings">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="action-text">
                            <div class="action-title">Pengaturan Akun</div>
                            <div class="action-desc">Ubah profil dan kata sandi</div>
                        </div>
                        <div class="action-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Close sidebar when clicking on nav links (mobile)
        document.querySelectorAll('.nav-item').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.remove('active');
                    sidebarOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
        
        // Add animation to stat cards on load
        document.addEventListener('DOMContentLoaded', () => {
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.style.animation = 'fadeInUp 0.5s ease';
            });
            
            // Add CSS animation
            const style = document.createElement('style');
            style.textContent = `
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
            `;
            document.head.appendChild(style);
        });
        
        // Auto-hide mobile menu on resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('active');
                sidebarOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    </script>
</body>
</html>