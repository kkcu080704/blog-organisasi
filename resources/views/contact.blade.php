<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Organisasi Kita</title>
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
        
        .contact-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }
        
        .contact-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .icon-address {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(29, 78, 216, 0.1) 100%);
            color: #3b82f6;
        }
        
        .icon-email {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.1) 100%);
            color: #f59e0b;
        }
        
        .icon-whatsapp {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(21, 128, 61, 0.1) 100%);
            color: #22c55e;
        }
        
        .form-input {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            background: white;
            border-color: #0d9488;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }
        
        .whatsapp-btn {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            transition: all 0.3s ease;
        }
        
        .whatsapp-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(34, 197, 94, 0.2);
        }
        
        .whatsapp-btn:active {
            transform: translateY(0);
        }
        
        .footer {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            margin-top: auto;
        }
        
        .map-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: #f8fafc;
        }
        
        .map-placeholder {
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
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
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .map-container {
                height: 300px;
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
                    <a href="{{ route('contact') }}" class="font-medium text-teal-600 flex items-center">
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
                    Hubungi Kami
                </h1>
                <p class="text-xl text-teal-100 mb-8 max-w-2xl mx-auto">
                    Punya pertanyaan atau ingin bergabung? Tim kami siap membantu Anda
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#contact-form" class="px-6 py-3 bg-white text-teal-700 rounded-xl font-medium hover:shadow-xl transition-all transform hover:-translate-y-1 flex items-center gap-2">
                        <i class="fab fa-whatsapp"></i>
                        Kirim Pesan
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 lg:px-8 py-12 -mt-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
            <!-- Contact Information -->
            <div class="space-y-8 fade-in" id="contact-info">
                <div class="contact-card p-8">
                    <div class="contact-icon icon-address">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Alamat Sekretariat</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Jl. Kemerdekaan No. 45<br>
                        Jakarta Pusat, Indonesia 10110
                    </p>
                    <div class="mt-6">
                        <a href="https://maps.google.com/?q=Jl.+Kemerdekaan+No.+45+Jakarta+Pusat" 
                           target="_blank" 
                           class="inline-flex items-center text-teal-600 font-medium hover:text-teal-800 transition-colors">
                            <i class="fas fa-directions mr-2"></i>
                            Lihat di Google Maps
                        </a>
                    </div>
                </div>
                
                <div class="contact-card p-8">
                    <div class="contact-icon icon-email">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Email Resmi</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-2">
                        halo@organisasikita.com
                    </p>
                    <p class="text-gray-500 text-sm">
                        Untuk pertanyaan umum dan informasi organisasi
                    </p>
                    <div class="mt-6">
                        <a href="mailto:halo@organisasikita.com" 
                           class="inline-flex items-center text-teal-600 font-medium hover:text-teal-800 transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Email
                        </a>
                    </div>
                </div>
                
                <div class="contact-card p-8">
                    <div class="contact-icon icon-whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">WhatsApp Admin</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-2">
                        +62 821-2738-3191
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Untuk konsultasi cepat dan pendaftaran anggota
                    </p>
                    <div class="mt-6">
                        <a href="https://wa.me/6282127383191" 
                           target="_blank" 
                           class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition-all">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Chat Sekarang
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form & Map -->
            <div class="space-y-8">
                <!-- Contact Form -->
                <div class="contact-card p-8 fade-in" id="contact-form">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-50 to-emerald-100 rounded-xl flex items-center justify-center mr-4">
                            <i class="fab fa-whatsapp text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Kirim Pesan via WhatsApp</h2>
                            <p class="text-gray-600 text-sm">Isi formulir dan kirim langsung ke WhatsApp Admin</p>
                        </div>
                    </div>
                    
                    <form id="waForm">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                    <input type="text" 
                                           id="nama" 
                                           class="form-input w-full pl-12 pr-4 py-3 rounded-xl"
                                           placeholder="Masukkan nama lengkap Anda"
                                           required>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Keperluan / Judul <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <i class="fas fa-tag absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                    <input type="text" 
                                           id="judul" 
                                           class="form-input w-full pl-12 pr-4 py-3 rounded-xl"
                                           placeholder="Contoh: Pendaftaran Anggota Baru"
                                           required>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Isi Pesan <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <i class="fas fa-comment absolute left-4 top-4 text-gray-400"></i>
                                    <textarea id="pesan" 
                                              class="form-input w-full pl-12 pr-4 py-3 rounded-xl resize-none"
                                              rows="4"
                                              placeholder="Tulis pesan Anda di sini..."
                                              required></textarea>
                                </div>
                                <p class="text-sm text-gray-500 mt-2">
                                    Pesan akan dikirim langsung ke WhatsApp Admin kami
                                </p>
                            </div>
                        </div>
                        
                        <button type="button" 
                                onclick="kirimKeWA()" 
                                class="whatsapp-btn text-white px-6 py-4 rounded-xl font-medium w-full mt-8 flex items-center justify-center gap-3">
                            <i class="fab fa-whatsapp text-2xl"></i>
                            <span class="text-lg">KIRIM SEKARANG VIA WHATSAPP</span>
                        </button>
                    </form>
                </div>
                
                <!-- Map Section -->
                <div class="contact-card overflow-hidden fade-in">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-map-marked-alt text-teal-600 mr-3"></i>
                            Lokasi Kantor Kami
                        </h3>
                    </div>
                    <div class="map-container h-64">
                        <!-- Google Maps Embed Placeholder -->
                        <div class="w-full h-full map-placeholder">
                            <div class="text-center p-6">
                                <i class="fas fa-map text-4xl mb-4 opacity-50"></i>
                                <p class="font-medium">Peta Lokasi Sekretariat</p>
                                <p class="text-sm mt-2">Jl. Kemerdekaan No. 45, Jakarta Pusat</p>
                                <a href="https://maps.google.com/?q=Jl.+Kemerdekaan+No.+45+Jakarta+Pusat" 
                                   target="_blank" 
                                   class="inline-block mt-4 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors">
                                    Buka di Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
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
                    <h4 class="text-lg font-bold mb-6">Jam Operasional</h4>
                    <div class="space-y-2 text-gray-400">
                        <div class="flex justify-between">
                            <span>Senin - Jumat</span>
                            <span>08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sabtu</span>
                            <span>09:00 - 14:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Minggu</span>
                            <span>Libur</span>
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
        // WhatsApp Form Function
        function kirimKeWA() {
            // Get form values
            var nama = document.getElementById('nama').value;
            var judul = document.getElementById('judul').value;
            var pesan = document.getElementById('pesan').value;

            // Validation
            if(nama === "" || judul === "" || pesan === "") {
                alert("Mohon lengkapi semua field yang diperlukan!");
                return;
            }

            // WhatsApp number (using country code 62, without + or 0)
            var nomorWhatsApp = "6282127383191"; 

            // Format message
            var text = "Halo Admin Organisasi Kita,%0a%0a" +
                       "Perkenalkan saya *" + nama + "*.%0a%0a" +
                       "*Keperluan:* " + judul + "%0a" +
                       "*Pesan:* " + pesan + "%0a%0a" +
                       "_Pesan ini dikirim melalui formulir kontak website._";

            // Open WhatsApp
            window.open("https://wa.me/" + nomorWhatsApp + "?text=" + text, '_blank');
            
            // Optional: Clear form after submission
            document.getElementById('waForm').reset();
        }
        
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
        
        // Add focus effects to form inputs
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-teal-100');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-teal-100');
            });
        });
        
        // Auto-focus form when clicking contact buttons
        document.querySelectorAll('a[href="#contact-form"]').forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(() => {
                    document.getElementById('nama').focus();
                }, 500);
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
        
        // Observe contact cards for animation
        document.querySelectorAll('.contact-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>