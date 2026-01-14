<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel - Sistem Organisasi</title>
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
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        
        .editor-container {
            max-width: 1200px;
            width: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .editor-header {
            background: linear-gradient(to right, #2563eb, #3b82f6);
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
            margin: 0 0 4px;
        }
        
        .header-text p {
            font-size: 0.95rem;
            opacity: 0.9;
            margin: 0;
        }
        
        .cancel-btn {
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
        
        .cancel-btn:hover {
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
        
        .required::after {
            content: " *";
            color: #ef4444;
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
            border-color: #3b82f6;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
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
            border-color: #3b82f6;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .image-upload-section {
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 24px;
            background-color: #f8fafc;
        }
        
        .current-image {
            margin-bottom: 20px;
        }
        
        .current-image-label {
            display: block;
            color: #475569;
            font-weight: 500;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        
        .image-preview {
            display: flex;
            gap: 20px;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .current-image-container {
            position: relative;
        }
        
        .current-image-container img {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e2e8f0;
        }
        
        .image-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #10b981;
            color: white;
            font-size: 0.7rem;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: 600;
        }
        
        .file-upload-container {
            border: 2px dashed #cbd5e1;
            border-radius: 10px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s;
            background-color: white;
            position: relative;
            flex-grow: 1;
            min-width: 200px;
        }
        
        .file-upload-container:hover {
            border-color: #94a3b8;
            background-color: #f8fafc;
        }
        
        .file-upload-container.dragover {
            border-color: #3b82f6;
            background-color: rgba(59, 130, 246, 0.05);
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
        
        .save-btn {
            background: linear-gradient(to right, #2563eb, #3b82f6);
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
        
        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        }
        
        .save-btn:active {
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
            
            .cancel-btn {
                align-self: stretch;
                justify-content: center;
            }
            
            .editor-content {
                padding: 20px;
            }
            
            .header-text h1 {
                font-size: 1.5rem;
            }
            
            .image-preview {
                flex-direction: column;
                align-items: stretch;
            }
            
            .current-image-container img {
                width: 100%;
                max-width: 300px;
                height: 150px;
            }
        }
        
        @media (max-width: 480px) {
            .header-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            
            .header-icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
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
                    <i class="fas fa-edit"></i>
                </div>
                <div class="header-text">
                    <h1>Edit Artikel</h1>
                    <p>Perbarui informasi artikel organisasi</p>
                </div>
            </div>
            
            <a href="{{ route('posts.index') }}" class="cancel-btn">
                <i class="fas fa-times"></i>
                Batal
            </a>
        </div>
        
        <!-- Content -->
        <div class="editor-content">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" id="editForm">
                @csrf
                @method('PUT')
                
                <div class="form-grid">
                    <!-- Judul Artikel -->
                    <div class="form-group">
                        <label class="form-label required">Judul Artikel</label>
                        <input 
                            type="text" 
                            name="judul" 
                            value="{{ old('judul', $post->judul) }}"
                            class="form-input" 
                            placeholder="Masukkan judul artikel"
                            required
                        >
                    </div>
                    
                    <!-- Kategori -->
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select">
                            <option value="Berita" {{ $post->kategori == 'Berita' ? 'selected' : '' }}>Berita</option>
                            <option value="Event" {{ $post->kategori == 'Event' ? 'selected' : '' }}>Event</option>
                            <option value="Pengumuman" {{ $post->kategori == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                        </select>
                    </div>
                </div>
                
                <!-- Gambar -->
                <div class="form-group">
                    <div class="image-upload-section">
                        <!-- Current Image -->
                        @if($post->gambar)
                        <div class="current-image">
                            <label class="current-image-label">Foto Saat Ini</label>
                            <div class="image-preview">
                                <div class="current-image-container">
                                    <img src="{{ asset('storage/' . $post->gambar) }}" alt="Current Image">
                                    <div class="image-badge">Saat Ini</div>
                                </div>
                                
                                <!-- New Image Upload -->
                                <div class="file-upload-container" id="uploadContainer">
                                    <div class="upload-icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <div class="upload-text">Unggah Foto Baru</div>
                                    <div class="upload-subtext">Klik atau drag & drop untuk mengganti foto</div>
                                    <div class="upload-subtext">Format: JPG, PNG (Maks. 5MB)</div>
                                    <input 
                                        type="file" 
                                        name="gambar" 
                                        id="gambar" 
                                        class="file-input" 
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                        </div>
                        @else
                        <!-- No Current Image - Show upload only -->
                        <div class="current-image">
                            <label class="current-image-label">Tambah Foto</label>
                            <div class="file-upload-container" id="uploadContainer">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="upload-text">Unggah Foto Artikel</div>
                                <div class="upload-subtext">Klik atau drag & drop untuk mengupload</div>
                                <div class="upload-subtext">Format: JPG, PNG (Maks. 5MB)</div>
                                <input 
                                    type="file" 
                                    name="gambar" 
                                    id="gambar" 
                                    class="file-input" 
                                    accept="image/*"
                                >
                            </div>
                        </div>
                        @endif
                        
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
                        
                        <!-- Info Text -->
                        <p class="text-sm text-gray-500 mt-4">
                            <i class="fas fa-info-circle mr-1"></i>
                            Biarkan kosong jika tidak ingin mengganti foto yang ada.
                        </p>
                    </div>
                </div>
                
                <!-- Editor Konten -->
                <div class="form-group">
                    <label class="form-label required">Isi Konten</label>
                    <textarea id="my-editor" name="isi" rows="15">{{ old('isi', $post->isi) }}</textarea>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="save-btn">
                    <i class="fas fa-save"></i>
                    SIMPAN PERUBAHAN
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
        
        // Only setup drag & drop if upload container exists
        if (uploadContainer) {
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
        }
        
        // Form submission handling
        document.getElementById('editForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menyimpan...';
            submitBtn.disabled = true;
        });
        
        // Input focus effects
        const formInputs = document.querySelectorAll('.form-input, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-blue-100');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-blue-100');
            });
        });
    </script>
</body>
</html>