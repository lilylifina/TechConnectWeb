<?= $this->include('layout/navbar') ?>

<style>
    :root {
        --primary-dark: #1e2a5a;
        --primary-medium: #2b3f8e;
        --primary-light: #3953b8;
        --primary-accent: #38bdf8;
        --gradient-primary: linear-gradient(135deg, #1e2a5a, #3953b8);
        --gradient-button: linear-gradient(90deg, #2b3f8e, #3953b8);
        --text-light: #f8fafc;
        --text-dark: #0f172a;
        --text-muted: #64748b;
        --bg-light: #f1f5f9;
        --bg-white: #ffffff;
        --bg-card: #ffffff;
        --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
        --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --radius-sm: 0.375rem;
        --radius-md: 0.75rem;
        --radius-lg: 1rem;
        --radius-xl: 1.5rem;
        --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        --success-bg: #dcfce7;
        --success-text: #166534;
        --error-bg: #fee2e2;
        --error-text: #b91c1c;
        --divider-color: #e2e8f0;
    }

    body {
        background-color: var(--bg-light);
        font-family: var(--font-sans);
        color: var(--text-dark);
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    /* Page Container */
    .page-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem 4rem;
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 2rem;
        padding-top: 100px;
    }

    .page-title {
        position: relative;
        font-size: 2.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--primary-dark);
        display: inline-block;
    }

    .page-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 30%;
        width: 40%;
        height: 4px;
        background: var(--gradient-primary);
        border-radius: 2px;
    }

    .page-subtitle {
        font-size: 1rem;
        color: var(--text-muted);
        max-width: 600px;
        margin: 1rem auto 0;
    }

    /* Form Card */
    .form-card {
        background: var(--bg-card);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        margin-bottom: 3rem;
    }

    /* Form Header */
    .form-header {
        background: var(--gradient-primary);
        color: var(--text-light);
        padding: 2rem 2.5rem;
        position: relative;
        overflow: hidden;
    }

    .form-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(255,255,255,0.08) 0%, transparent 50%);
    }

    .form-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        position: relative;
        z-index: 1;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .form-description {
        font-size: 0.95rem;
        opacity: 0.9;
        margin: 0;
        position: relative;
        z-index: 1;
        max-width: 600px;
    }

    /* Form Content */
    .form-content {
        padding: 2.5rem;
    }

    /* Flash Messages */
    .flash-message {
        padding: 1rem 1.25rem;
        border-radius: var(--radius-md);
        margin-bottom: 2rem;
        font-weight: 500;
    }

    .flash-success {
        background-color: var(--success-bg);
        color: var(--success-text);
        border-left: 4px solid #16a34a;
    }

    .flash-error {
        background-color: var(--error-bg);
        color: var(--error-text);
        border-left: 4px solid #dc2626;
    }

    .validation-errors ul {
        list-style-type: none;
        padding-left: 0;
        margin: 0;
    }

    .validation-errors li {
        padding: 0.5rem 0;
        color: var(--error-text);
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .form-control {
        width: 100%;
        padding: 0.85rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        color: var(--text-dark);
        background-color: var(--bg-white);
        background-clip: padding-box;
        border: 1px solid #e2e8f0;
        border-radius: var(--radius-md);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: var(--primary-light);
        outline: 0;
        box-shadow: 0 0 0 3px rgba(59, 83, 184, 0.15);
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    /* File Upload */
    .file-upload-container {
        margin-top: 1rem;
    }

    .current-image {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .current-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid var(--primary-light);
        box-shadow: var(--shadow-sm);
        margin-right: 1rem;
    }

    .current-image-label {
        font-size: 0.875rem;
        color: var(--text-muted);
    }

    .file-upload {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .file-input-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .file-input-button {
        display: inline-flex;
        align-items: center;
        padding: 0.65rem 1.25rem;
        font-size: 0.95rem;
        font-weight: 500;
        color: var(--text-dark);
        background-color: var(--bg-light);
        border: 1px solid #e2e8f0;
        border-radius: var(--radius-md);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .file-input-button:hover {
        background-color: #e2e8f0;
    }

    .file-input-button svg {
        width: 18px;
        height: 18px;
        margin-right: 0.5rem;
    }

    .file-input {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .file-name {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-left: 0.5rem;
    }

    /* Buttons */
    .btn-container {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.85rem 1.75rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: var(--radius-md);
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-icon {
        width: 18px;
        height: 18px;
        margin-right: 0.5rem;
    }

    .btn-primary {
        background: var(--gradient-button);
        color: white;
        border: none;
        box-shadow: var(--shadow-md);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(43, 63, 142, 0.25);
    }

    .btn-secondary {
        background: transparent;
        color: var(--primary-medium);
        border: 1px solid var(--primary-medium);
    }

    .btn-secondary:hover {
        background: rgba(59, 83, 184, 0.05);
        transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-container {
            padding: 1.5rem 1rem 3rem;
        }

        .page-title {
            font-size: 1.75rem;
        }

        .form-header {
            padding: 1.75rem 1.5rem;
        }

        .form-content {
            padding: 1.75rem 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .btn-container {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 1.5rem;
        }

        .form-title {
            font-size: 1.25rem;
        }
    }

    /* Section Divider */
    .section-divider {
        display: flex;
        align-items: center;
        margin: 2rem 0;
        color: var(--text-muted);
    }

    .section-divider::before,
    .section-divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid var(--divider-color);
    }

    .divider-text {
        font-size: 0.95rem;
        font-weight: 600;
        padding: 0 1rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Password Input */
    .password-input-container {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        padding: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .password-toggle svg {
        width: 18px;
        height: 18px;
    }

    .hidden {
        display: none;
    }

    .form-text {
        font-size: 0.875rem;
        margin-top: 0.375rem;
    }

    .text-muted {
        color: var(--text-muted);
    }

    /* Custom File Input for Different Browsers */
    @-moz-document url-prefix() {
        .file-input-button {
            padding: 0.6rem 1.25rem;
        }
    }

    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .file-input-button {
            padding: 0.7rem 1.25rem;
        }
    }
</style>

<div class="page-container">
    <div class="page-header">
        <h1 class="page-title">Edit Profil</h1>
        <p class="page-subtitle">Perbarui informasi pribadi dan pengaturan akun Anda</p>
    </div>

    <div class="form-card">
        <div class="form-header">
            <h2 class="form-title">Informasi Profil</h2>
            <p class="form-description">Silakan isi atau perbarui informasi profil Anda di bawah ini</p>
        </div>
        
        <div class="form-content">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash-message flash-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            
            <?php if (\Config\Services::validation()->getErrors()): ?>
                <div class="flash-message flash-error validation-errors">
                    <?= \Config\Services::validation()->listErrors() ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/profile/update') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label class="form-label" for="fullname">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= esc($user['fullname'] ?? '') ?>" placeholder="Masukkan nama lengkap Anda">
                </div>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= esc($user['username']) ?>" placeholder="Masukkan username Anda">
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= esc($user['email']) ?>" placeholder="Masukkan alamat email Anda">
                </div>

                <div class="form-group">
                    <label class="form-label" for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" placeholder="Ceritakan sedikit tentang diri Anda"><?= esc($user['bio'] ?? '') ?></textarea>
                </div>

                <!-- Password Section -->
                <div class="section-divider">
                    <span class="divider-text">Ubah Password</span>
                </div>

                <div class="form-group">
                    <label class="form-label" for="current_password">Password Saat Ini</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Masukkan password saat ini">
                        <button type="button" class="password-toggle" data-target="current_password">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-icon">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-off-icon hidden">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                </div>

                <div class="form-group">
                    <label class="form-label" for="new_password">Password Baru</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukkan password baru">
                        <button type="button" class="password-toggle" data-target="new_password">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-icon">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-off-icon hidden">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirm_password">Konfirmasi Password Baru</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru">
                        <button type="button" class="password-toggle" data-target="confirm_password">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-icon">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eye-off-icon hidden">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Photo Upload Section -->
                <div class="section-divider">
                    <span class="divider-text">Foto Profil</span>
                </div>

                <div class="form-group">
                    <label class="form-label">Foto Profil</label>
                    
                    <?php if (!empty($user['profile_picture'])): ?>
                        <div class="current-image">
                            <img src="<?= base_url($user['profile_picture']) ?>" alt="Foto Profil Saat Ini">
                            <span class="current-image-label">Foto profil saat ini</span>
                        </div>
                    <?php endif; ?>
                    
                    <div class="file-upload">
                        <div class="file-input-wrapper">
                            <label class="file-input-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                </svg>
                                Pilih Foto
                                <input type="file" class="file-input" id="profile_picture" name="profile_picture" accept="image/*">
                            </label>
                        </div>
                        <span class="file-name" id="file-name-display">Tidak ada file yang dipilih</span>
                    </div>
                </div>

                <div class="btn-container">
                    <button type="submit" class="btn btn-primary">
                        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                            <polyline points="7 3 7 8 15 8"></polyline>
                        </svg>
                        Simpan Perubahan
                    </button>
                    
                    <a href="<?= base_url('/profile') ?>" class="btn btn-secondary">
                        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 12H5"></path>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Display selected filename
    document.getElementById('profile_picture').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
        document.getElementById('file-name-display').textContent = fileName;
    });

    // Password visibility toggle
    document.querySelectorAll('.password-toggle').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const passwordInput = document.getElementById(targetId);
            const eyeIcon = this.querySelector('.eye-icon');
            const eyeOffIcon = this.querySelector('.eye-off-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeOffIcon.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeOffIcon.classList.add('hidden');
            }
        });
    });
</script>

<?= $this->include('layout/footer') ?>