<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container py-5">
  <!-- Hero / Welcome Section -->
  <div class="text-center mb-5">
    <h1 class="display-5 fw-bold welcome-title">Selamat Datang di <span class="highlight">TechConnect</span></h1>
    <p class="lead mt-3 welcome-desc">
      TechConnect adalah rumah digital bagi para pecinta teknologi. Baca artikel, bagikan pemikiran, dan temukan inspirasi dari dunia digital yang terus berkembang.
    </p>
    <a href="<?= base_url('news') ?>" class="btn btn-primary-custom mt-3">🚀 Mulai Menjelajah</a>
  </div>

  <!-- Feature Section -->
  <div class="row text-center mb-5">
    <div class="col-md-4">
      <div class="feature-card p-4 rounded-4 shadow-sm h-100 border-0 bg-gradient-blue text-white">
        <i class="bi bi-journal-text fs-1 mb-3"></i>
        <h5 class="fw-semibold">Tulis Artikel</h5>
        <p>Ekspresikan ide dan wawasanmu tentang dunia teknologi modern dengan mudah.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card p-4 rounded-4 shadow-sm h-100 border-0 bg-gradient-blue-light text-white">
        <i class="bi bi-book fs-1 mb-3"></i>
        <h5 class="fw-semibold">Baca Wawasan</h5>
        <p>Ikuti tren dan pengetahuan terkini dalam dunia teknologi dari berbagai penulis.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card p-4 rounded-4 shadow-sm h-100 border-0 bg-gradient-blue-dark text-white">
        <i class="bi bi-people fs-1 mb-3"></i>
        <h5 class="fw-semibold">Komunitas Tech</h5>
        <p>Bergabung dan berdiskusi dengan komunitas digital untuk saling menginspirasi.</p>
      </div>
    </div>

    
  </div>
</div>

<!-- Kategori Populer -->
<div class="container mb-5">
  <h4 class="text-center fw-bold mb-4 text-gradient">🌟 Kategori Populer</h4>
  <div class="d-flex flex-wrap justify-content-center gap-3">
    <span class="badge category-badge">AI & Machine Learning</span>
    <span class="badge category-badge">Web Development</span>
    <span class="badge category-badge">Startup & Inovasi</span>
    <span class="badge category-badge">Cybersecurity</span>
    <span class="badge category-badge">Career Tips</span>
  </div>
</div>

<style>
  .category-badge {
    background:rgb(173, 205, 252);
    color: #1e3c72;
    padding: 10px 20px;
    border-radius: 100px;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.3px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease-in-out;
    border: 1px solid #e0e0e0;
  }

  .category-badge:hover {
    background: linear-gradient(135deg, #ffd700, #f4e29b);
    transform: scale(1.05);
    color: #1e3c72;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .text-gradient {
    background: linear-gradient(to right, #1e3c72, #2a5298);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>


<style>
  .welcome-title {
    color: #1e3c72;
  }

  .highlight {
    color: #2a5298;
  }

  .welcome-desc {
    max-width: 750px;
    margin: 0 auto;
    color: #444;
  }

  .btn-primary-custom {
    background: linear-gradient(90deg, #1e3c72, #2a5298);
    color: #fff;
    padding: 10px 24px;
    font-weight: 500;
    border: none;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s ease;
  }

  .btn-primary-custom:hover {
    background: linear-gradient(90deg, #1c3668, #244a89);
    color: #fff;
  }

  .feature-card {
    transition: 0.3s ease;
  }

  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
  }

  .bg-gradient-blue {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
  }

  .bg-gradient-blue-light {
    background: linear-gradient(135deg, #2a5298, #3c6ebf);
  }

  .bg-gradient-blue-dark {
    background: linear-gradient(135deg, #162f5b, #1e3c72);
  }

  @media (max-width: 768px) {
    .feature-card h5 {
      font-size: 1.1rem;
    }
  }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<?= $this->endSection() ?>
