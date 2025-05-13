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

    /* Main Profile Card */
    .profile-card {
        background: var(--bg-card);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        display: flex;
        margin-bottom: 3rem;
    }

    /* Profile Sidebar */
    .profile-sidebar {
        width: 30%;
        background: var(--gradient-primary);
        padding: 3rem 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .profile-sidebar::before {
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

    /* Profile Picture */
    .profile-picture-container {
        position: relative;
        margin-bottom: 1.5rem;
        z-index: 1;
    }

    .profile-picture-wrapper {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        padding: 4px;
        background: linear-gradient(135deg, rgba(255,255,255,0.2), rgba(255,255,255,0.05));
        box-shadow: var(--shadow-md);
        position: relative;
    }

    .profile-picture {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }

    .profile-picture:hover {
        transform: scale(1.05);
    }

    .status-indicator {
        position: absolute;
        bottom: 12px;
        right: 12px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #10b981;
        border: 3px solid var(--primary-light);
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
        z-index: 2;
    }

    /* User Info */
    .user-info {
        color: var(--text-light);
        text-align: center;
        position: relative;
        z-index: 1;
        width: 100%;
    }

    .user-name {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0 0 0.25rem 0;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .user-email {
        font-size: 0.875rem;
        opacity: 0.85;
        margin-bottom: 1.5rem;
    }

    /* Stats */
    .stats-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        width: 100%;
        margin-top: 1.5rem;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: var(--radius-md);
        padding: 1rem;
        text-align: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
    }

    .stat-value {
        font-size: 1.75rem;
        font-weight: 700;
        display: block;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.875rem;
        opacity: 0.9;
    }

    /* Profile Content */
    .profile-content {
        width: 70%;
        padding: 3rem 2.5rem;
    }

    /* Sections */
    .content-section {
        margin-bottom: 2.5rem;
    }

    .content-section:last-child {
        margin-bottom: 0;
    }

    .section-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .section-icon {
        width: 24px;
        height: 24px;
        margin-right: 0.75rem;
        color: var(--primary-medium);
    }

    .section-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--primary-dark);
        margin: 0;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--gradient-button);
        border-radius: 3px;
    }

    /* Fields */
    .field-group {
        margin-bottom: 1.5rem;
    }

    .field-group:last-child {
        margin-bottom: 0;
    }

    .field-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-muted);
        margin-bottom: 0.5rem;
    }

    .field-value {
        font-size: 1rem;
        color: var(--text-dark);
        background-color: var(--bg-light);
        padding: 0.75rem 1rem;
        border-radius: var(--radius-md);
        border-left: 3px solid var(--primary-medium);
        word-break: break-word;
    }

    /* Bio section */
    .bio-content {
        background: rgba(59, 130, 246, 0.05);
        border-radius: var(--radius-md);
        padding: 1.25rem;
        border-left: 4px solid var(--primary-medium);
        position: relative;
        line-height: 1.7;
    }

    .bio-content::before {
        content: """;
        position: absolute;
        top: -10px;
        left: 10px;
        font-size: 3rem;
        color: rgba(59, 130, 246, 0.2);
        font-family: Georgia, serif;
    }

    /* Buttons */
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: var(--radius-md);
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
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
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(43, 63, 142, 0.25);
    }

    .btn-secondary {
        background: transparent;
        color: var(--primary-medium);
        border: 1px solid var(--primary-medium);
    }

    .btn-secondary:hover {
        background: rgba(59, 83, 184, 0.05);
        transform: translateY(-3px);
        box-shadow: var(--shadow-sm);
    }

    /* Footer Banner */
    .footer-banner {
        margin-top: 2rem;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .profile-card {
            flex-direction: column;
        }

        .profile-sidebar, .profile-content {
            width: 100%;
        }

        .profile-sidebar {
            padding: 2.5rem 1.5rem;
        }

        .profile-content {
            padding: 2.5rem 2rem;
        }
    }

    @media (max-width: 768px) {
        .page-container {
            padding: 1.5rem 1rem 3rem;
        }

        .page-title {
            font-size: 1.75rem;
        }

        .profile-picture-wrapper {
            width: 140px;
            height: 140px;
        }

        .profile-content {
            padding: 2rem 1.5rem;
        }

        .user-name {
            font-size: 1.5rem;
        }

        .action-buttons {
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

        .profile-picture-wrapper {
            width: 120px;
            height: 120px;
        }

        .user-name {
            font-size: 1.25rem;
        }

        .stat-value {
            font-size: 1.5rem;
        }

        .section-title {
            font-size: 1.1rem;
        }
    }
</style>

<div class="page-container">
    <div class="page-header">
        <h1 class="page-title">Profil Saya</h1>
        <p class="page-subtitle">Kelola informasi pribadi dan pengaturan akun Anda</p>
    </div>

    <div class="profile-card">
        <!-- Profile Sidebar -->
        <div class="profile-sidebar">
            <div class="profile-picture-container">
                <div class="profile-picture-wrapper">
                    <?php if (!empty($user['profile_picture'])) : ?>
                        <img class="profile-picture" src="<?= base_url($user['profile_picture']) ?>" alt="Foto Profil">
                    <?php else : ?>
                        <img class="profile-picture" src="https://ui-avatars.com/api/?name=<?= urlencode($user['username']) ?>&background=3953b8&color=fff&size=200" alt="Avatar">
                    <?php endif; ?>
                    <div class="status-indicator"></div>
                </div>
            </div>
            
            <div class="user-info">
                <h2 class="user-name"><?= esc($user['username']) ?></h2>
                <div class="user-email"><?= esc($user['email']) ?></div>
                
                <div class="stats-container">
                    <div class="stat-card">
                        <span class="stat-value">12</span>
                        <span class="stat-label">Proyek</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-value">85%</span>
                        <span class="stat-label">Profil</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Profile Content -->
        <div class="profile-content">
            <!-- Personal Information -->
            <div class="content-section">
                <div class="section-header">
                    <svg class="section-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <h3 class="section-title">Informasi Pribadi</h3>
                </div>
                
                <div class="field-group">
                    <span class="field-label">Username</span>
                    <div class="field-value"><?= esc($user['username']) ?></div>
                </div>
                
                <div class="field-group">
                    <span class="field-label">Email</span>
                    <div class="field-value"><?= esc($user['email']) ?></div>
                </div>
                
                <div class="field-group">
                    <span class="field-label">Nama Lengkap</span>
                    <div class="field-value"><?= esc($user['fullname']) ?></div>
                </div>
            </div>
            
            <!-- Bio Section -->
            <div class="content-section">
                <div class="section-header">
                    <svg class="section-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <h3 class="section-title">Bio</h3>
                </div>
                
                <div class="bio-content">
                    <?php if (!empty($user['bio'])) : ?>
                        <?= nl2br(esc($user['bio'])) ?>
                    <?php else : ?>
                        <em>Bio belum diisi. Klik tombol Edit Profil untuk menambahkan bio.</em>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="<?= base_url('/profile/edit') ?>" class="btn btn-primary">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    Edit Profil
                </a>
                
                <a href="<?= base_url('/homepage') ?>" class="btn btn-secondary">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer') ?>