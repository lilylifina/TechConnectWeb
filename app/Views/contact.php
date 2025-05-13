<?= $this->extend('layout/layout_landingpage') ?>

<?= $this->section('content') ?>

<!-- Contact Form Modern -->
<div class="container py-4 py-md-5">
    <div class="row justify-content-center">
        <div class="col-md-8 animate-fade-in">
            <div class="form-card">
                <div class="form-header">
                    <h2 class="fw-bold gradient-text">Hello, <?= $name ?>!</h2>
                    <p class="text-muted">Silakan hubungi kami melalui form berikut ini. Kami akan segera merespon pesan Anda.</p>
                </div>

                <form action="" class="mt-4">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control modern-input" id="email" placeholder="you@example.com" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea name="message" id="message" class="form-control modern-input" style="height: 160px" placeholder="Tulis pesan Anda..." required></textarea>
                        <label for="message">Pesan</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3">
                        <span>Kirim Pesan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send-fill ms-2" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    /* Modern tech style */
    :root {
        --primary-color: #4361ee;
        --primary-gradient: linear-gradient( #1e3c72, #2a5298);
        --shadow-color: rgba(67, 97, 238, 0.2);
        --light-bg: #f8f9ff;
        --card-bg: rgba(255, 255, 255, 0.95);
        --border-radius: 16px;
    }
    
    body {
        font-family: 'Inter', sans-serif;
        background: var(--light-bg);
        color: #333;
        position: relative;
        overflow-x: hidden;
    }
    
    /* Glassmorphism card effect */
    .form-card {
        background: var(--card-bg);
        backdrop-filter: blur(10px);
        border-radius: var(--border-radius);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        padding: 2.5rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
    }
    
    /* Modern floating inputs */
    .modern-input {
        border-radius: 12px;
        border: 1px solid #e0e6ff;
        padding: 1.2rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: rgba(248, 249, 255, 0.8);
    }
    
    .modern-input:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px var(--shadow-color);
        background-color: #fff;
    }
    
    .form-floating > .modern-input {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }
    
    .form-floating > label {
        padding: 1rem;
        color: #6c757d;
    }
    
    /* Gradient text */
    .gradient-text {
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    /* Modern button */
    .btn-primary {
        background: var(--primary-gradient);
        border: none;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1.05rem;
        letter-spacing: 0.5px;
        box-shadow: 0 6px 18px var(--shadow-color);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px var(--shadow-color);
        background: linear-gradient(135deg, #3a56e4,rgb(23, 28, 128));
    }
    
    /* Animation */
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Background decoration */
    body::before, body::after {
        content: '';
        position: fixed;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        z-index: -1;
        filter: blur(100px);
        opacity: 0.15;
    }
    
    body::before {
        background: #4361ee;
        top: -100px;
        right: -100px;
    }
    
    body::after {
        background:rgb(22, 0, 163);
        bottom: -100px;
        left: -100px;
    }
    
    /* Form header */
    .form-header {
        margin-bottom: 1.5rem;
    }
    
    /* Form responsiveness */
    @media (max-width: 768px) {
        .form-card {
            padding: 1.75rem;
            border-radius: 12px;
        }
    }
</style>

<!-- Google Fonts (Inter) -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<?= $this->endSection() ?>