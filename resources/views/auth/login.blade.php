<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Sistem Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
        
        .login-header {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .logo {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }
        
        .form-control {
            border: 1px solid #e1e5eb;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s;
            font-size: 15px;
        }
        
        .form-control:focus {
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }
        
        .btn-login {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background: linear-gradient(to right, #2a5298, #3a6bc5);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(42, 82, 152, 0.2);
        }
        
        .alert-error {
            background: rgba(220, 53, 69, 0.1);
            border: 1px solid rgba(220, 53, 69, 0.2);
            border-radius: 10px;
            padding: 12px 15px;
            color: #dc3545;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .footer-links {
            font-size: 14px;
            color: #6c757d;
        }
        
        .footer-links a {
            color: #2a5298;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #1e3c72;
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .login-card {
                width: 100%;
                max-width: 400px;
            }
            
            .login-header {
                padding: 25px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="login-card w-full max-w-md">
        <div class="login-header">
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-users-cog"></i>
                </div>
            </div>
            <h1 class="text-2xl font-bold">Sistem Organisasi</h1>
            <p class="text-sm opacity-90 mt-1">Login untuk pengurus dan administrator</p>
        </div>
        
        <div class="p-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf
                
                <div class="mb-6 relative">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                        <i class="fas fa-envelope mr-1"></i> Alamat Email
                    </label>
                    <div class="relative">
                        <div class="input-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <input 
                            type="email" 
                            id="email"
                            name="email" 
                            class="form-control w-full pl-12" 
                            placeholder="nama@organisasi.com"
                            required
                        >
                    </div>
                </div>
                
                <div class="mb-8 relative">
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-gray-700 text-sm font-medium" for="password">
                            <i class="fas fa-key mr-1"></i> Kata Sandi
                        </label>
                    </div>
                    <div class="relative">
                        <div class="input-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password"
                            name="password" 
                            class="form-control w-full pl-12" 
                            placeholder="Masukkan kata sandi"
                            required
                        >
                        <button type="button" id="togglePassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="mb-6 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Ingat saya
                    </label>
                </div>
                
                <button type="submit" class="btn-login w-full text-white font-medium text-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>MASUK KE SISTEM
                </button>
            </form>
            
            @if ($errors->any())
                <div class="mt-6 alert-error flex items-start">
                    <i class="fas fa-exclamation-circle mt-0.5 mr-3"></i>
                    <div>
                        <p class="font-medium">Gagal login</p>
                        <p class="text-sm mt-1">{{ $errors->first() }}</p>
                    </div>
                </div>
            @endif
            
            <div class="mt-8 pt-6 border-t border-gray-200 text-center footer-links">
                <p>Belum memiliki akun? <a href="{{ route('register') }}" class="font-bold text-blue-700 hover:text-blue-900">Daftar Admin Baru</a></p>
                <p class="mt-2">© {{ date('Y') }} Sistem Organisasi. Seluruh hak dilindungi.</p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Form submission animation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>MEMPROSES...';
            submitBtn.disabled = true;
        });
        
        // Input focus effects
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-blue-200');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-blue-200');
            });
        });
    </script>
</body>
</html>