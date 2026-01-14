<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Akun - Sistem Organisasi</title>
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
        
        .sidebar {
            background: linear-gradient(180deg, #0f766e 0%, #115e59 100%);
            box-shadow: 0 0 30px rgba(15, 118, 110, 0.2);
        }
        
        .sidebar-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .sidebar-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(4px);
        }
        
        .sidebar-item.active {
            background: rgba(255, 255, 255, 0.15);
            border-left: 4px solid #14b8a6;
        }
        
        .sidebar-item.active::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(20, 184, 166, 0.1), transparent);
        }
        
        .logout-btn:hover {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .form-input {
            transition: all 0.3s ease;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
        }
        
        .form-input:focus {
            background: white;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
            border-color: #0d9488;
        }
        
        .password-input:focus {
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
            border-color: #f59e0b;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.2);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(245, 158, 11, 0.2);
        }
        
        .success-alert {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            border-left: 4px solid #10b981;
            animation: slideIn 0.5s ease;
        }
        
        .error-message {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            border-left: 4px solid #ef4444;
        }
        
        @keyframes slideIn {
            from {
                transform: translateY(-10px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .mobile-menu-btn {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
        }
        
        .mobile-sidebar {
            background: linear-gradient(180deg, #0f766e 0%, #115e59 100%);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-sidebar.open {
            transform: translateX(0);
        }
        
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        @media (max-width: 768px) {
            .grid-cols-1 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="text-gray-800">
    
    <!-- Mobile Menu Button -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobileMenuBtn" class="mobile-menu-btn w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg">
            <i class="fas fa-bars text-lg"></i>
        </button>
    </div>
    
    <!-- Overlay -->
    <div id="overlay" class="overlay fixed inset-0 z-40 lg:hidden"></div>
    
    <div class="flex min-h-screen">
        <!-- Sidebar (Desktop) -->
        <aside class="sidebar w-64 text-white flex-col hidden lg:flex">
            <div class="h-20 flex items-center justify-center border-b border-teal-700/50">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-user-shield text-xl"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl">Admin Panel</h1>
                        <p class="text-teal-200 text-xs">Organisasi Kita</p>
                    </div>
                </div>
            </div>
            
            <nav class="flex-1 px-4 py-8 space-y-1">
                <a href="{{ route('dashboard') }}" class="sidebar-item flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-home w-6 mr-3"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="{{ route('posts.index') }}" class="sidebar-item flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-newspaper w-6 mr-3"></i>
                    <span>Artikel & Berita</span>
                </a>
                
                <a href="{{ route('profile.edit') }}" class="sidebar-item active flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-user-cog w-6 mr-3"></i>
                    <span>Pengaturan Akun</span>
                </a>
            </nav>
            
            <div class="p-6 border-t border-teal-700/50">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-teal-400 to-emerald-400 rounded-full flex items-center justify-center font-bold">
                        {{ substr($user->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-medium">{{ $user->name }}</p>
                        <p class="text-teal-200 text-xs">{{ $user->email }}</p>
                    </div>
                </div>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn w-full flex items-center justify-center px-4 py-3 bg-red-500/10 text-red-200 hover:text-white rounded-xl transition">
                        <i class="fas fa-sign-out-alt w-6 mr-3"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </aside>
        
        <!-- Sidebar (Mobile) -->
        <aside id="mobileSidebar" class="mobile-sidebar fixed inset-y-0 left-0 w-64 text-white flex-col z-50 lg:hidden">
            <div class="h-20 flex items-center justify-between px-6 border-b border-teal-700/50">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div>
                        <h1 class="font-bold">Admin Panel</h1>
                    </div>
                </div>
                <button id="closeMobileMenu" class="text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <nav class="flex-1 px-4 py-8 space-y-1">
                <a href="{{ route('dashboard') }}" class="sidebar-item flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-home w-6 mr-3"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="{{ route('posts.index') }}" class="sidebar-item flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-newspaper w-6 mr-3"></i>
                    <span>Artikel & Berita</span>
                </a>
                
                <a href="{{ route('profile.edit') }}" class="sidebar-item active flex items-center px-4 py-3 rounded-xl">
                    <i class="fas fa-user-cog w-6 mr-3"></i>
                    <span>Pengaturan Akun</span>
                </a>
            </nav>
            
            <div class="p-6 border-t border-teal-700/50">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-teal-400 to-emerald-400 rounded-full flex items-center justify-center font-bold">
                        {{ substr($user->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-medium text-sm">{{ $user->name }}</p>
                        <p class="text-teal-200 text-xs">{{ $user->email }}</p>
                    </div>
                </div>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn w-full flex items-center justify-center px-4 py-3 bg-red-500/10 text-red-200 hover:text-white rounded-xl transition">
                        <i class="fas fa-sign-out-alt w-6 mr-3"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen">
            <!-- Header -->
            <header class="bg-white shadow-sm py-4 px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="lg:hidden">
                        <h1 class="text-xl font-bold text-gray-800">Pengaturan Akun</h1>
                        <p class="text-gray-600 text-sm">Kelola profil dan keamanan akun Anda</p>
                    </div>
                    <div class="hidden lg:block">
                        <h1 class="text-2xl font-bold text-gray-800">Pengaturan Akun</h1>
                        <p class="text-gray-600">Kelola profil dan keamanan akun Anda</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="hidden lg:flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-teal-400 to-emerald-400 rounded-full flex items-center justify-center font-bold text-white">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <div>
                                <p class="font-medium text-sm">{{ $user->name }}</p>
                                <p class="text-gray-500 text-xs">Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="flex-1 p-6 lg:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Data Diri Card -->
                    <div class="card p-6 lg:p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-id-card text-teal-600 text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Data Diri</h2>
                                <p class="text-gray-600 text-sm">Perbarui informasi profil Anda</p>
                            </div>
                        </div>
                        
                        <!-- Success Message -->
                        @if(session('success'))
                        <div class="success-alert p-4 rounded-lg mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-600 text-lg mr-3"></i>
                                <div>
                                    <p class="font-medium text-green-800">Berhasil!</p>
                                    <p class="text-green-700 text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <form action="{{ route('profile.update') }}" method="POST" id="profileForm">
                            @csrf
                            @method('PUT')
                            
                            <div class="space-y-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Lengkap <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                        <input type="text" 
                                               name="name" 
                                               value="{{ old('name', $user->name) }}" 
                                               class="form-input w-full pl-12 pr-4 py-3 rounded-xl"
                                               required
                                               placeholder="Masukkan nama lengkap">
                                    </div>
                                    @error('name')
                                    <div class="error-message p-3 rounded-lg mt-2 flex items-center">
                                        <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                                        <p class="text-red-700 text-sm">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                        <input type="email" 
                                               name="email" 
                                               value="{{ old('email', $user->email) }}" 
                                               class="form-input w-full pl-12 pr-4 py-3 rounded-xl"
                                               required
                                               placeholder="email@organisasi.com">
                                    </div>
                                    @error('email')
                                    <div class="error-message p-3 rounded-lg mt-2 flex items-center">
                                        <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                                        <p class="text-red-700 text-sm">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-primary text-white px-6 py-3 rounded-xl font-medium w-full mt-8">
                                <i class="fas fa-save mr-2"></i>Simpan Perubahan
                            </button>
                        </form>
                    </div>
                    
                    <!-- Ganti Password Card -->
                    <div class="card p-6 lg:p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-50 to-amber-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-lock text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Ganti Password</h2>
                                <p class="text-gray-600 text-sm">Perbarui kata sandi untuk keamanan</p>
                            </div>
                        </div>
                        
                        <!-- Success Message -->
                        @if(session('success_password'))
                        <div class="success-alert p-4 rounded-lg mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-600 text-lg mr-3"></i>
                                <div>
                                    <p class="font-medium text-green-800">Berhasil!</p>
                                    <p class="text-green-700 text-sm">{{ session('success_password') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <form action="{{ route('profile.password') }}" method="POST" id="passwordForm">
                            @csrf
                            @method('PUT')
                            
                            <div class="space-y-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Password Saat Ini <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-key absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                        <input type="password" 
                                               name="current_password" 
                                               class="form-input password-input w-full pl-12 pr-4 py-3 rounded-xl"
                                               required
                                               placeholder="Masukkan password saat ini">
                                        <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('current_password')
                                    <div class="error-message p-3 rounded-lg mt-2 flex items-center">
                                        <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                                        <p class="text-red-700 text-sm">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Password Baru <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                        <input type="password" 
                                               name="password" 
                                               class="form-input password-input w-full pl-12 pr-4 py-3 rounded-xl"
                                               required
                                               placeholder="Minimal 6 karakter">
                                        <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                    <div class="error-message p-3 rounded-lg mt-2 flex items-center">
                                        <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                                        <p class="text-red-700 text-sm">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Konfirmasi Password <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                        <input type="password" 
                                               name="password_confirmation" 
                                               class="form-input password-input w-full pl-12 pr-4 py-3 rounded-xl"
                                               required
                                               placeholder="Ketik ulang password baru">
                                        <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-secondary text-white px-6 py-3 rounded-xl font-medium w-full mt-8">
                                <i class="fas fa-key mr-2"></i>Perbarui Password
                            </button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const overlay = document.getElementById('overlay');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileSidebar.classList.add('open');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        closeMobileMenu.addEventListener('click', () => {
            mobileSidebar.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        overlay.addEventListener('click', () => {
            mobileSidebar.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Toggle Password Visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
        
        // Form Submission Loading States
        const profileForm = document.getElementById('profileForm');
        const passwordForm = document.getElementById('passwordForm');
        
        profileForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menyimpan...';
            submitBtn.disabled = true;
        });
        
        passwordForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
            submitBtn.disabled = true;
        });
        
        // Auto-hide success messages after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.success-alert').forEach(alert => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => {
                    if (alert.parentNode) {
                        alert.parentNode.removeChild(alert);
                    }
                }, 500);
            });
        }, 5000);
        
        // Add focus effects to form inputs
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-opacity-20');
                if (this.classList.contains('password-input')) {
                    this.parentElement.classList.add('ring-orange-300');
                } else {
                    this.parentElement.classList.add('ring-teal-300');
                }
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-opacity-20', 'ring-teal-300', 'ring-orange-300');
            });
        });
    </script>
</body>
</html>