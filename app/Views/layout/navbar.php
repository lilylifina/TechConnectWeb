<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechConnect - Navbar yang Diperbaharui</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
      background-color: var(--light);
      color: var(--text);
      padding-top: 80px; /* Ruang untuk navbar fixed */
    }

    /* Navbar styling */
    .navbar {
      padding: 1rem 0;
      background: linear-gradient(135deg, var(--dark) 0%, #1e40af 100%);
      font-family: 'Plus Jakarta Sans', sans-serif;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .navbar.scrolled {
      padding: 0.7rem 0;
      background: rgba(15, 23, 42, 0.95);
      backdrop-filter: blur(10px);
    }

    .navbar-brand {
      font-weight: 800;
      font-size: 1.7rem;
      color: white;
      padding: 0;
    }

    .navbar-brand span {
      color: var(--accent);
    }

    .navbar-nav {
      margin-left: auto;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
      margin: 0 0.8rem;
      padding: 0.5rem 0.3rem;
      position: relative;
      transition: all 0.3s ease;
    }

    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--accent);
      transition: width 0.3s ease;
    }

    .nav-link:hover {
      color: white;
    }

    .nav-link:hover:after {
      width: 100%;
    }

    .nav-link.active {
      color: white;
    }

    .nav-link.active:after {
      width: 100%;
    }

    /* Buttons styling */
    .btn-custom {
      padding: 0.7rem 1.8rem;
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

    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
    }

    .btn-outline-custom {
      background-color: rgba(255, 255, 255, 0.15);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }

    .btn-outline-custom:hover {
      background-color: white;
      color: var(--primary);
      transform: translateY(-3px);
    }

    /* User account dropdown styling */
    .dropdown-menu {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      overflow: hidden;
      margin-top: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      animation: fadeInDown 0.3s ease-out;
      padding: 0.5rem;
    }

    .dropdown-item {
      font-weight: 500;
      padding: 0.6rem 1.2rem;
      color: var(--dark);
      border-radius: 6px;
      transition: all 0.2s ease;
    }

    .dropdown-item:hover {
      background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(139, 92, 246, 0.1) 100%);
      color: var(--primary);
      transform: translateX(5px);
    }

    /* Mobile navbar toggle styling */
    .navbar-toggler {
      border: none;
      padding: 0;
      width: 30px;
      height: 30px;
      position: relative;
      transition: all 0.3s ease-in-out;
      background: transparent;
    }

    .navbar-toggler:focus {
      box-shadow: none;
      outline: none;
    }

    .navbar-toggler-icon {
      background-image: none;
      position: relative;
      height: 2px;
      width: 100%;
      background-color: white;
      display: inline-block;
      transition: all 0.3s ease-in-out;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
      content: '';
      position: absolute;
      left: 0;
      height: 2px;
      width: 100%;
      background-color: white;
      transition: all 0.3s ease-in-out;
    }

    .navbar-toggler-icon::before {
      top: -8px;
    }

    .navbar-toggler-icon::after {
      top: 8px;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
      background-color: transparent;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
      transform: rotate(45deg);
      top: 0;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
      transform: rotate(-45deg);
      top: 0;
    }

    /* Animation keyframes */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Nav item animations */
    .navbar-nav .nav-item {
      opacity: 0;
      animation: fadeInItem 0.5s ease-out forwards;
    }

    .navbar-nav .nav-item:nth-child(1) { animation-delay: 0.1s; }
    .navbar-nav .nav-item:nth-child(2) { animation-delay: 0.2s; }
    .navbar-nav .nav-item:nth-child(3) { animation-delay: 0.3s; }
    .navbar-nav .nav-item:nth-child(4) { animation-delay: 0.4s; }
    .navbar-nav .nav-item:nth-child(5) { animation-delay: 0.5s; }
    .navbar-nav .nav-item:nth-child(6) { animation-delay: 0.6s; }
    .navbar-nav .nav-item:nth-child(7) { animation-delay: 0.7s; }

    @keyframes fadeInItem {
      to {
        opacity: 1;
      }
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      .navbar-collapse {
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.97) 0%, rgba(30, 64, 175, 0.97) 100%);
        backdrop-filter: blur(10px);
        margin: 0 -1rem;
        padding: 1rem;
        border-radius: 0 0 15px 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      }

      .nav-link {
        padding: 0.7rem 1rem;
        margin: 0.3rem 0;
        border-radius: 8px;
      }
      
      .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
      }
      
      .dropdown-menu {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
      }
      
      .dropdown-item {
        color: rgba(255, 255, 255, 0.85);
      }
      
      .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.1);
        color: white;
      }
      
      .navbar-nav .nav-item {
        transform: translateX(-20px);
      }
      
      @keyframes fadeInItem {
        to {
          opacity: 1;
          transform: translateX(0);
        }
      }
    }

    /* Sample content styling */
    .sample-content {
      padding: 2rem 0;
      text-align: center;
    }

    .sample-content h2 {
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 1rem;
    }

    .sample-content p {
      color: var(--text);
      max-width: 800px;
      margin: 0 auto 2rem;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="homepage">Tech<span>Connect</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/homepage">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">News</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
               data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle me-1"></i> Akun
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/admin/news"><i class="fas fa-newspaper me-2"></i> Kelola Berita</a></li>
              <li><a class="dropdown-item" href="/profile"><i class="fas fa-user-edit me-2"></i> Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
              </a></li>
            </ul>
          </li>
          <li class="nav-item d-none">
            <!-- Tombol ini akan ditampilkan jika user belum login -->
            <a class="btn btn-custom btn-outline-custom ms-2" href="#">Masuk</a>
          </li>
          <li class="nav-item d-none">
            <!-- Tombol ini akan ditampilkan jika user belum login -->
            <a class="btn btn-custom btn-primary-custom ms-2" href="#">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Script untuk navbar scroll effect dan konfirmasi logout -->
  <script>
    // Mendeteksi scroll untuk mengubah tampilan navbar
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('mainNav');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Fungsi untuk konfirmasi logout
    function confirmLogout() {
      if (confirm("Yakin mau keluar?")) {
        // Implementasi logout di sini
        window.location.href = "/logout";
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>