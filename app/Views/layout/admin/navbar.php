<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">
    <!-- Admin Home link - mengarah ke halaman akun -->
    <a class="navbar-brand" href="<?= base_url('admin/news') ?>">Admin Home</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <!-- Mengarah ke halaman News -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('news') ?>">News</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url('admin/news/new') ?>" class="btn btn-primary mr-3">New Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="confirmLogout()">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Script untuk konfirmasi logout -->
<script>
  function confirmLogout() {
    if (confirm("Yakin mau keluar?")) {
      window.location.href = "<?= base_url('logout') ?>";
    }
  }
</script>



<!-- CSS -->
<style>
  /* Basic navbar styling */
  .custom-navbar {
    background: linear-gradient(to right, #1e3c72, #2a5298); /* Gradient Blue */
    padding: 15px 0;
    font-family: 'Segoe UI', sans-serif;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;
  }

  /* Keyframe animation for fading in navbar */
  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  /* Navbar brand styling */
  .custom-navbar .navbar-brand {
    color: #ffd700;
    font-weight: bold;
    font-size: 24px;
    transition: color 0.3s;
  }

  .custom-navbar .navbar-brand:hover {
    color: #fff;
  }

  /* Navbar link styling */
  .custom-navbar .nav-link {
    color: #fff;
    margin: 0 10px;
    transition: color 0.3s, transform 0.3s;
    font-size: 16px;
  }

  .custom-navbar .nav-link:hover {
    color: #ffd700;
    transform: scale(1.1);
    border-bottom: 2px solid #ffd700;
  }

  /* Navbar toggler icon for mobile */
  .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.5);
    transition: transform 0.3s ease-in-out;
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  /* Add bounce animation for navbar toggle on mobile */
  .navbar-toggler.collapsing {
    transform: scale(1.1);
  }

  /* Animation when the mobile navbar menu is toggled */
  .navbar-toggler:focus {
    outline: none;
    box-shadow: none;
  }

  .navbar-collapse {
    opacity: 0;
    transform: translateY(-10px);
    animation: slideIn 0.5s ease-out forwards;
  }

  @keyframes slideIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Add animation delay to each nav-item on hover */
  .navbar-nav .nav-item {
    animation: fadeInItem 0.5s ease-in-out forwards;
    opacity: 0;
    transform: translateX(-20px);
  }

  .navbar-nav .nav-item:nth-child(1) {
    animation-delay: 0.2s;
  }

  .navbar-nav .nav-item:nth-child(2) {
    animation-delay: 0.3s;
  }

  .navbar-nav .nav-item:nth-child(3) {
    animation-delay: 0.4s;
  }

  .navbar-nav .nav-item:nth-child(4) {
    animation-delay: 0.5s;
  }

  .navbar-nav .nav-item:nth-child(5) {
    animation-delay: 0.6s;
  }

  @keyframes fadeInItem {
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
</style>
