<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Artikel Baru - Sistem Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
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
        
        .editor-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .editor-header {
            background: linear-gradient(to right, #0f766e, #14b8a6);
            color: white;
            padding: 24px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-title {
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
        
        .header-text h1 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
        }
        
        .header-text p {
            font-size: 0.95rem;
            opacity: 0.9;
            margin: 4px 0 0;
        }
        
        .back-btn {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }
        
        .editor-content {
            padding: 32px;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            color: #1e293b;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        
        .form-label span {
            color: #64748b;
            font-weight: normal;
            margin-left: 4px;
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
        
        .form-select {
            width: 100%;
            padding: 14px 16px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f8fafc;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 20px;
        }
        
        .form-select:focus {
            outline: none;
            border-color: #0d9488;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }
        
        .file-upload-container {
            position: relative;
            border: 2px dashed #cbd5e1;
            border-radius: 10px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s;
            background-color: #f8fafc;
        }
        
        .file-upload-container:hover {
            border-color: #94a3b8;
            background-color: #f1f5f9;
        }
        
        .file-upload-container.dragover {
            border-color: #0d9488;
            background-color: rgba(13, 148, 136, 0.05);
        }
        
        .upload-icon {
            font-size: 2rem;
            color: #64748b;
            margin-bottom: 12px;
        }
        
        .upload-text {
            color: #475569;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .upload-subtext {
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 16px;
        }
        
        .file-input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
        
        .selected-file {
            margin-top: 16px;
            padding: 12px;
            background: #f0fdf4;
            border-radius: 8px;
            border: 1px solid #bbf7d0;
            display: flex;
            align-items: center;
            gap: 12px;
            display: none;
        }
        
        .selected-file i {
            color: #16a34a;
            font-size: 1.2rem;
        }
        
        .file-info {
            flex-grow: 1;
        }
        
        .file-name {
            font-weight: 500;
            color: #166534;
        }
        
        .file-size {
            font-size: 0.85rem;
            color: #4d7c0f;
        }
        
        .tox-tinymce {
            border-radius: 10px !important;
            border: 1.5px solid #e2e8f0 !important;
            overflow: hidden;
        }
        
        .publish-btn {
            background: linear-gradient(to right, #0f766e, #14b8a6);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 24px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            letter-spacing: 0.5px;
        }
        
        .publish-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 148, 136, 0.2);
        }
        
        .publish-btn:active {
            transform: translateY(0);
        }
        
        @media (max-width: 1024px) {
            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .editor-content {
                padding: 24px;
            }
            
            .editor-header {
                padding: 20px 24px;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .editor-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .back-btn {
                align-self: stretch;
                justify-content: center;
            }
            
            .editor-content {
                padding: 20px;
            }
            
            .header-text h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="editor-container">
        <!-- Header -->
        <div class="editor-header">
            <div class="header-title">
                <div class="header-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="header-text">
                    <h1>Tulis Kabar Organisasi</h1>
                    <p>Bagikan informasi terbaru kepada seluruh anggota</p>
                </div>
            </div>
            
            <a href="{{ route('dashboard') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Dashboard
            </a>
        </div>
        
        <!-- Content -->
        <div class="editor-content">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" id="articleForm">
                @csrf
                
                <div class="form-grid">
                    <!-- Judul Artikel -->
                    <div class="form-group">
                        <label class="form-label">
                            Judul Artikel <span>(wajib)</span>
                        </label>
                        <input 
                            type="text" 
                            name="judul" 
                            class="form-input" 
                            placeholder="Masukkan judul artikel yang menarik"
                            required
                        >
                    </div>
                    
                    <!-- Kategori -->
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select">
                            <option value="Berita">Berita</option>
                            <option value="Event">Event</option>
                            <option value="Pengumuman">Pengumuman</option>
                        </select>
                    </div>
                </div>
                
                <!-- Upload Gambar -->
                <div class="form-group">
                    <label class="form-label">Foto Utama</label>
                    <div class="file-upload-container" id="uploadContainer">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="upload-text">Klik atau drag & drop untuk mengupload</div>
                        <div class="upload-subtext">Format: JPG, PNG (Maks. 5MB)</div>
                        <input 
                            type="file" 
                            name="gambar" 
                            id="gambar" 
                            class="file-input" 
                            accept="image/*"
                        >
                    </div>
                    
                    <!-- Selected File Preview -->
                    <div class="selected-file" id="selectedFile">
                        <i class="fas fa-check-circle"></i>
                        <div class="file-info">
                            <div class="file-name" id="fileName"></div>
                            <div class="file-size" id="fileSize"></div>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700" id="removeFile">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    <!-- Error Message -->
                    @error('gambar')
                    <div class="text-red-500 text-sm mt-2 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <!-- Editor Konten -->
                <div class="form-group">
                    <label class="form-label">
                        Isi Konten <span>(wajib)</span>
                    </label>
                    <textarea id="my-editor" name="isi" rows="15" placeholder="Tulis konten artikel Anda di sini..."></textarea>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="publish-btn">
                    <i class="fas fa-paper-plane"></i>
                    TERBITKAN SEKARANG
                </button>
            </form>
        </div>
    </div>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '#my-editor',
            height: 500,
            menubar: false,
            plugins: 'lists link image code table wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
            skin: 'oxide',
            content_css: 'default',
            branding: false,
            statusbar: false,
            promotion: false
        });
        
        // File Upload Handling
        const fileInput = document.getElementById('gambar');
        const uploadContainer = document.getElementById('uploadContainer');
        const selectedFile = document.getElementById('selectedFile');
        const fileName = document.getElementById('fileName');
        const fileSize = document.getElementById('fileSize');
        const removeFileBtn = document.getElementById('removeFile');
        
        // Drag & Drop events
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadContainer.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            uploadContainer.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            uploadContainer.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            uploadContainer.classList.add('dragover');
        }
        
        function unhighlight() {
            uploadContainer.classList.remove('dragover');
        }
        
        // Handle dropped files
        uploadContainer.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            handleFiles(files);
        }
        
        // Handle file input change
        fileInput.addEventListener('change', function() {
            handleFiles(this.files);
        });
        
        // Handle files
        function handleFiles(files) {
            if (files.length > 0) {
                const file = files[0];
                const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                
                fileName.textContent = file.name;
                fileSize.textContent = `${fileSizeMB} MB`;
                
                selectedFile.style.display = 'flex';
            }
        }
        
        // Remove selected file
        removeFileBtn.addEventListener('click', function() {
            fileInput.value = '';
            selectedFile.style.display = 'none';
        });
        
        // Form submission handling
        document.getElementById('articleForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
            submitBtn.disabled = true;
        });
        
        // Input focus effects
        const formInputs = document.querySelectorAll('.form-input, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-teal-100');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-teal-100');
            });
        });
    </script>
</body>
</html>