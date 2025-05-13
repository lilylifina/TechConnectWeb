<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TechConnect - Portal Berita Teknologi Terkini</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <style>
    :root {
      --primary: #2563eb;
      --secondary: #8b5cf6;
      --accent: #06b6d4;
      --dark: #0f172a;
      --light: #f8fafc;
      --text: #334155;
    }
    
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      margin: 0;
      background-color: #f8fafc;
      color: var(--text);
      overflow-x: hidden;
    }

    .navbar {
      padding: 0.75rem 0;
      background-color: var(--dark);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      z-index: 100;
    }

    .navbar-brand {
      font-weight: 800;
      font-size: 1.5rem;
      color: white;
    }

    .navbar-brand span {
      color: var(--accent);
    }

    .navbar-toggler {
      border: none;
      background: rgba(255, 255, 255, 0.15);
      padding: 0.5rem;
      border-radius: 8px;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
      padding: 0.5rem 0.7rem;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: white;
    }

    .btn-custom {
      padding: 0.6rem 1.2rem;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-primary-custom {
      background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
      color: white;
      border: none;
      box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
    }

    .btn-outline-custom {
      background-color: rgba(255, 255, 255, 0.15);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .hero-section {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, var(--dark) 0%, #1e40af 100%);
      color: white;
      overflow: hidden;
      padding: 5rem 0 3rem;
    }

    .hero-bg {
      position: absolute;
      top: 0;
      right: 0;
      width: 100%;
      height: 100%;
      opacity: 0.5;
      background-image: 
        radial-gradient(circle at 25% 25%, rgba(6, 182, 212, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(139, 92, 246, 0.3) 0%, transparent 50%);
      z-index: 1;
    }

    .hero-pattern {
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 70px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='%23f8fafc'%3E%3C/path%3E%3C/svg%3E");
      background-size: cover;
      z-index: 3;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 2.5rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 1.5rem;
      background: linear-gradient(to right, #ffffff, #06b6d4);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: fadeInDown 1s ease-out;
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-section p {
      font-size: 1.1rem;
      font-weight: 400;
      margin-bottom: 2rem;
      max-width: 600px;
      opacity: 0.9;
      margin-left: auto;
      margin-right: auto;
      animation: fadeIn 1.5s ease-out;
    }
    
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .hero-stats {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
      flex-wrap: wrap;
      animation: fadeInUp 2s ease-out;
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 800;
      color: var(--accent);
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.8;
    }

    .news-cards {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 2rem;
    }

    .news-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      animation: cardSlide 0.6s ease forwards;
      opacity: 0;
      transform-style: preserve-3d;
      cursor: pointer;
    }
    
    .news-card:nth-child(1) {
      animation-delay: 0s;
    }
    
    .news-card:nth-child(2) {
      animation-delay: 0.2s;
    }
    
    .news-card:nth-child(3) {
      animation-delay: 0.4s;
    }

    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    @keyframes cardSlide {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .news-category {
      display: inline-block;
      background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
      color: white;
      font-size: 0.7rem;
      font-weight: 600;
      padding: 0.2rem 0.8rem;
      border-radius: 20px;
      margin-bottom: 0.8rem;
    }

    .news-title {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: var(--dark);
      line-height: 1.4;
    }

    .news-meta {
      display: flex;
      align-items: center;
      font-size: 0.75rem;
      color: var(--text);
    }

    .news-meta img {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      margin-right: 0.6rem;
      object-fit: cover;
    }

    .mobile-action-buttons {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .action-button {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
      transition: all 0.3s ease;
    }

    .action-button:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    }

    .pulse {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
      }
      70% {
        box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(37, 99, 235, 0);
      }
    }
    
    .scroll-down {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 0.9rem;
      font-weight: 500;
      display: flex;
      flex-direction: column;
      align-items: center;
      animation: bounce 2s infinite;
      z-index: 5;
      cursor: pointer;
    }

    .scroll-down i {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0) translateX(-50%);
      }
      40% {
        transform: translateY(-10px) translateX(-50%);
      }
      60% {
        transform: translateY(-5px) translateX(-50%);
      }
    }

    @media (min-width: 768px) {
      .news-cards {
        flex-direction: row;
        flex-wrap: wrap;
      }
      
      .news-card {
        flex: 0 0 calc(50% - 0.5rem);
      }
      
      .hero-content {
        text-align: left;
      }
      
      .hero-section p {
        margin-left: 0;
      }
      
      .hero-stats {
        justify-content: flex-start;
      }
    }

    @media (min-width: 992px) {
      .news-card {
        flex: 0 0 calc(33.333% - 0.67rem);
      }
      
      .hero-section h1 {
        font-size: 3rem;
      }
    }

    @media (max-width: 576px) {
      .btn-container {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }
      
      .btn-custom {
        width: 100%;
      }
      
      .hero-section h1 {
        font-size: 2rem;
      }
      
      .hero-section {
        padding-top: 6rem;
      }
      
      .scroll-down {
        bottom: 70px;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Tech<span>Connect</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-auto">
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faqs">FAQs</a>
          </li>
        </ul>
        <div class="d-flex gap-2">
          <a href="/login" class="btn btn-custom btn-outline-custom">Masuk</a>
          <a href="/register" class="btn btn-custom btn-primary-custom">Daftar</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-pattern"></div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto hero-content">
          <h1>Temukan Dunia Teknologi Terkini</h1>
          <p>TechConnect menyajikan berita, inovasi, dan analisis teknologi terdepan untuk para profesional dan penggemar teknologi.</p>
          
          <div class="btn-container d-flex gap-2">
            <a href="/login" class="btn btn-custom btn-primary-custom">Mulai Jelajahi</a>
            <a href="#" class="btn btn-custom btn-outline-custom">Pelajari Lebih</a>
          </div>
          
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-number">1200+</div>
              <div class="stat-label">Artikel</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">50+</div>
              <div class="stat-label">Kontributor</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">24/7</div>
              <div class="stat-label">Update</div>
            </div>
          </div>
          
          <div class="news-cards">
            <div class="news-card">
              <span class="news-category">AI</span>
              <h3 class="news-title">Perkembangan Terbaru AI Generatif di Tahun 2025</h3>
              <div class="news-meta">
                <img src="<?= base_url('gambar/gambar1.jpg') ?>" class="team-img" alt="Rina Wijaya">
                <div>Rina Wijaya • 5 mnt membaca</div>
              </div>
            </div>
            
            <div class="news-card">
              <span class="news-category">Cloud</span>
              <h3 class="news-title">Transformasi Digital dengan Multi-Cloud Solution</h3>
              <div class="news-meta">
                <img src="<?= base_url('gambar/gambar3.jpg') ?>" class="team-img" alt="Budi Santoso">
                <div>Budi Santoso • 4 mnt membaca</div>
              </div>
            </div>
            
            <div class="news-card">
              <span class="news-category">Security</span>
              <h3 class="news-title">Tren Keamanan Siber di Era Digital 2025</h3>
              <div class="news-meta">
                <img src="<?= base_url('gambar/gambar2.jpg') ?>" class="team-img" alt="Arya Pratama">
                <div>Arya Pratama • 6 mnt membaca</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="mobile-action-buttons">
      <a href="#" class="action-button pulse"><i class="fas fa-search"></i></a>
      <a href="/login" class="action-button"><i class="fas fa-user"></i></a>
    </div>
    
    <div class="scroll-down">
      <span>Scroll untuk melihat lebih</span>
      <i class="fas fa-chevron-down"></i>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('mainNav');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    
    // Counter animation
    document.addEventListener('DOMContentLoaded', function() {
      const counters = document.querySelectorAll('.stat-number');
      const speed = 200;
      
      counters.forEach(counter => {
        const updateCount = () => {
          const originalText = counter.innerText;
          if (originalText.includes('+') || originalText.includes('/')) {
            // Skip 24/7 and other special formats
            return;
          }
          
          const target = parseInt(originalText.replace('+', ''));
          counter.innerText = '0';
          
          const increment = target / speed;
          
          function incrementCounter() {
            const currentValue = parseInt(counter.innerText);
            if (currentValue < target) {
              counter.innerText = Math.ceil(currentValue + increment);
              setTimeout(incrementCounter, 15);
            } else {
              counter.innerText = target + '+';
            }
          }
          
          incrementCounter();
        };
        
        updateCount();
      });
    });

    // Card hover animation
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.news-card');
      
      cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
          const rect = card.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          
          const centerX = rect.width / 2;
          const centerY = rect.height / 2;
          
          const angleY = (x - centerX) / 30;
          const angleX = (centerY - y) / 30;
          
          card.style.transform = `rotateY(${angleY}deg) rotateX(${angleX}deg) translateY(-5px)`;
        });
        
        card.addEventListener('mouseleave', function() {
          card.style.transition = 'transform 0.5s ease';
          card.style.transform = 'rotateY(0deg) rotateX(0deg) translateY(0)';
          setTimeout(() => {
            card.style.transition = '';
          }, 500);
        });
      });
    });
  </script>
</body>
</html>