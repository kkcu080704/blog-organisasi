<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin - Sistem Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .register-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            min-height: 90vh;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        
        .left-panel {
            flex: 1;
            background: linear-gradient(145deg, #0d9488 0%, #115e59 100%);
            color: white;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .left-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDUpIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=');
            opacity: 0.1;
        }
        
        .right-panel {
            flex: 1.2;
            padding: 50px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .logo {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-right: 15px;
        }
        
        .system-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 5px;
            letter-spacing: -0.5px;
        }
        
        .system-subtitle {
            font-size: 1rem;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .feature-list {
            margin-top: 50px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            font-size: 1rem;
        }
        
        .feature-icon {
            background: rgba(255, 255, 255, 0.15);
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .card-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0f766e;
            margin-bottom: 8px;
        }
        
        .card-subtitle {
            color: #64748b;
            margin-bottom: 35px;
            font-size: 1.05rem;
        }
        
        .form-group {
            margin-bottom: 22px;
        }
        
        .form-label {
            display: block;
            color: #475569;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f8fafc;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #0d9488;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }
        
        .input-with-icon input {
            padding-left: 46px;
        }
        
        .access-code-input {
            background-color: #fef2f2;
            border-color: #fecaca;
        }
        
        .access-code-input:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }
        
        .register-btn {
            width: 100%;
            background: linear-gradient(to right, #0d9488, #115e59);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
            letter-spacing: 0.5px;
        }
        
        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.2);
        }
        
        .register-btn:active {
            transform: translateY(0);
        }
        
        .login-link {
            text-align: center;
            margin-top: 30px;
            color: #64748b;
            font-size: 0.95rem;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }
        
        .login-link a {
            color: #0d9488;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .login-link a:hover {
            color: #115e59;
            text-decoration: underline;
        }
        
        .error-message {
            color: #dc2626;
            font-size: 0.85rem;
            margin-top: 5px;
            display: flex;
            align-items: center;
        }
        
        .error-icon {
            margin-right: 6px;
            font-size: 0.9rem;
        }
        
        .info-text {
            font-size: 0.85rem;
            color: #6b7280;
            margin-top: 5px;
        }
        
        @media (max-width: 1024px) {
            .register-container {
                flex-direction: column;
                max-width: 700px;
                min-height: auto;
            }
            
            .left-panel, .right-panel {
                padding: 40px 30px;
            }
            
            .left-panel {
                padding-bottom: 50px;
            }
            
            .system-title {
                font-size: 1.9rem;
            }
        }
        
        @media (max-width: 640px) {
            .register-container {
                margin: 10px;
                border-radius: 15px;
            }
            
            .left-panel, .right-panel {
                padding: 30px 20px;
            }
            
            .system-title {
                font-size: 1.7rem;
            }
            
            .card-title {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Left Panel: System Info & Features -->
        <div class="left-panel">
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div>
                    <div class="system-title">Sistem Organisasi</div>
                    <div class="system-subtitle">Pendaftaran Admin & Pengurus Inti</div>
                </div>
            </div>
            
            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <strong>Akses Terbatas</strong> - Hanya untuk pengurus inti organisasi
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div>
                        <strong>Hak Admin Lengkap</strong> - Kelola seluruh aspek organisasi
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div>
                        <strong>Dashboard Analytics</strong> - Pantau statistik organisasi
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div>
                        <strong>Konfigurasi Sistem</strong> - Sesuaikan pengaturan organisasi
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <div>
                        <strong>Log Aktivitas</strong> - Lacak semua perubahan sistem
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel: Registration Form -->
        <div class="right-panel">
            <h1 class="card-title">Daftar Admin Baru</h1>
            <p class="card-subtitle">
                Lengkapi formulir berikut untuk membuat akun admin organisasi
            </p>
            
            <!-- Registration Form -->
            <form action="{{ route('register') }}" method="POST" id="registerForm">
                @csrf
                
                <div class="form-group">
                    <label class="form-label" for="name">Nama Lengkap</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-input" 
                            placeholder="Masukkan nama lengkap Anda"
                            required
                            value="{{ old('name') }}"
                        >
                    </div>
                    @error('name')
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle error-icon"></i>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="email">Alamat Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input" 
                            placeholder="contoh@organisasi.com"
                            required
                            value="{{ old('email') }}"
                        >
                    </div>
                    @error('email')
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle error-icon"></i>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Minimal 6 karakter"
                            required
                        >
                    </div>
                    <p class="info-text">Gunakan kombinasi huruf, angka, dan simbol untuk keamanan maksimal</p>
                    @error('password')
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle error-icon"></i>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="form-input" 
                            placeholder="Ketik ulang password Anda"
                            required
                        >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="token">Kode Akses Organisasi</label>
                    <div class="input-with-icon">
                        <i class="fas fa-key input-icon"></i>
                        <input 
                            type="text" 
                            id="token" 
                            name="token" 
                            class="form-input access-code-input" 
                            placeholder="Masukkan kode rahasia dari Ketua"
                            required
                        >
                    </div>
                    <p class="info-text">* Hanya pengurus inti yang memiliki kode akses ini</p>
                    @error('token')
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle error-icon"></i>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <button type="submit" class="register-btn">
                    <i class="fas fa-user-plus mr-2"></i>DAFTAR SEKARANG
                </button>
            </form>
            
            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
            </div>
        </div>
    </div>

    <script>
        // Form submission handler
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses Pendaftaran...';
            submitBtn.disabled = true;
        });
        
        // Add focus effects to form inputs
        const formInputs = document.querySelectorAll('.form-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-teal-100');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-teal-100');
            });
        });
        
        // Password validation feedback
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        
        function validatePassword() {
            if (passwordInput.value.length > 0 && passwordInput.value.length < 6) {
                passwordInput.style.borderColor = '#ef4444';
            } else if (passwordInput.value.length >= 6) {
                passwordInput.style.borderColor = '#10b981';
            }
            
            if (confirmPasswordInput.value.length > 0) {
                if (passwordInput.value === confirmPasswordInput.value && passwordInput.value.length >= 6) {
                    confirmPasswordInput.style.borderColor = '#10b981';
                } else {
                    confirmPasswordInput.style.borderColor = '#ef4444';
                }
            }
        }
        
        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);
    </script>
</body>
</html>