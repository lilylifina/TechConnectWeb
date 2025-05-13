<?= $this->extend('layout/layout_landingpage') ?>

<?= $this->section('content') ?>
<div class="login-section py-5">
    <div class="container">
        <div class="login-container shadow">
            <div class="login-form-container">
                <h2 class="login-title">Masuk ke Akun</h2>
                
                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="<?= base_url('/login-process') ?>">
                    <?= csrf_field() ?>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control <?= (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '' ?>" 
                                   id="email" name="email" placeholder="email@domain.com" 
                                   value="<?= old('email') ?>" required autocomplete="off">
                            <span class="input-icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <?php if(isset($validation) && $validation->hasError('email')): ?>
                            <div class="error-feedback">
                                <?= $validation->getError('email') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control <?= (isset($validation) && $validation->hasError('password')) ? 'is-invalid' : '' ?>" 
                                   id="password" name="password" placeholder="••••••••" required>
                            <span class="input-icon password-toggle" onclick="togglePassword()">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        <?php if(isset($validation) && $validation->hasError('password')): ?>
                            <div class="error-feedback">
                                <?= $validation->getError('password') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                        <a href="<?= base_url("/contact") ?>" class="float-end forgot-link">Lupa password?</a>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-login">
                            Masuk Sekarang
                        </button>
                    </div>
                    
                    <p class="mt-4 text-center register-text">
                        Belum punya akun? <a href="<?= base_url('/register') ?>" class="register-link">Daftar di sini</a>
                    </p>
                </form>
            </div>
            <div class="login-graphic">
                <div class="graphic-content text-center">
                    <div class="logo-container">
                        <svg viewBox="0 0 24 24" class="tech-logo">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                        </svg>
                    </div>
                    <h3 class="text-brand mb-2">TechConnect</h3>
                    <p class="graphic-tagline">
                        Selamat datang kembali! Masuk untuk melanjutkan perjalanan teknologi Anda bersama kami.
                    </p>
                </div>
                <div class="graphic-bg">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-color:rgb(0, 46, 121);
        --primary-hover:rgb(0, 22, 63);
        --text-color: #202124;
        --text-muted: #5f6368;
        --bg-light: #f8f9fa;
        --border-color: #dadce0;
        --white: #ffffff;
        --dark-blue: #1a237e;
        --tech-blue: #162255;
    }
    
    .login-section {
        background-color: var(--bg-light);
        min-height: 70vh;
        display: flex;
        align-items: center;
    }
    
    .login-container {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        max-width: 900px;
        margin: 0 auto;
    }
    
    .login-form-container {
        flex: 1;
        padding: 40px;
        position: relative;
    }
    
    .login-title {
        font-weight: 700;
        color: var(--text-color);
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }
    
    .login-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary-color);
        border-radius: 3px;
    }

    .form-label {
        font-weight: 500;
        font-size: 0.9rem;
        color: var(--text-color);
    }
    
    .form-control {
        height: 48px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 0.75rem 1rem;
        padding-right: 2.5rem;
        background-color: #f8f9fa;
        transition: all 0.2s ease;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.15);
        background-color: var(--white);
    }
    
    .form-control.is-invalid {
        border-color: #dc3545;
        background-image: none;
    }
    
    .error-feedback {
        color: #dc3545;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }
    
    .input-group {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        z-index: 10;
    }
    
    .password-toggle {
        cursor: pointer;
    }
    
    .password-toggle:hover {
        color: var(--primary-color);
    }
    
    .form-check {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .form-check-label {
        color: var(--text-muted);
        font-size: 0.9rem;
    }
    
    .forgot-link {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .forgot-link:hover {
        text-decoration: underline;
    }
    
    .btn-login {
        background: var(--primary-color);
        color: var(--white);
        border: none;
        height: 48px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .btn-login:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: var(--white);
    }
    
    .register-text {
        font-size: 0.9rem;
        color: var(--text-muted);
    }
    
    .register-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }
    
    .register-link:hover {
        text-decoration: underline;
    }
    
    /* Graphic side */
    .login-graphic {
        width: 40%;
        background: var(--tech-blue);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        color: var(--white);
    }
    
    .graphic-content {
        position: relative;
        z-index: 2;
        padding: 30px;
    }
    
    .logo-container {
        margin-bottom: 20px;
    }
    
    .tech-logo {
        width: 80px;
        height: 80px;
        fill: none;
        stroke: white;
        stroke-width: 1;
        stroke-linejoin: round;
        stroke-linecap: round;
    }
    
    .text-brand {
        font-weight: 700;
        background: linear-gradient(90deg,rgb(246, 246, 246),rgb(249, 251, 254));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .graphic-tagline {
        font-size: 0.9rem;
        line-height: 1.5;
        max-width: 80%;
        margin: 0 auto;
    }
    
    .graphic-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
    }
    
    .circle-1 {
        width: 200px;
        height: 200px;
        top: -100px;
        right: -50px;
    }
    
    .circle-2 {
        width: 150px;
        height: 150px;
        bottom: -20px;
        right: 30%;
    }
    
    .circle-3 {
        width: 80px;
        height: 80px;
        top: 40%;
        left: -20px;
    }
    
    .alert {
        border-radius: 8px;
        padding: 15px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .login-container {
            flex-direction: column-reverse;
        }
        
        .login-graphic {
            width: 100%;
            height: 200px;
        }
        
        .tech-logo {
            width: 60px;
            height: 60px;
        }
    }
    
    @media (max-width: 576px) {
        .login-form-container {
            padding: 30px 20px;
        }
        
        .login-graphic {
            height: 180px;
        }
        
        .graphic-content {
            padding: 20px;
        }
        
        .tech-logo {
            width: 50px;
            height: 50px;
        }
        
        .text-brand {
            font-size: 1.3rem;
        }
        
        .graphic-tagline {
            font-size: 0.8rem;
        }
    }
</style>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.password-toggle i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        }
    }
</script>
<?= $this->endSection() ?>