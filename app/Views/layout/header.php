<!-- HTML -->
<header class="hero-header">
  <div class="hero-container">
    <div class="logo-container">
      <div class="tech-icon">
        <svg viewBox="0 0 24 24" class="tech-svg">
          <path d="M12 2L2 7v10l10 5 10-5V7L12 2z" />
          <path d="M12 22V12M12 12L2 7M12 12l10-5M12 2v5" />
        </svg>
      </div>
    </div>
    <h1>Portal Berita <span class="highlight-text">TechConnect</span></h1>
    <p class="hero-subtitle">Sumber terpercaya untuk berita teknologi & pemrograman.</p>
    <div class="tech-particles"></div>
  </div>
</header>

<!-- CSS -->
<style>
  /* Hero Section */
  .hero-header {
    background: linear-gradient(135deg, #0c0e30, #2c3e90, #1e3c72);
    background-size: 300% 400%;
    color: #fff;
    padding: 80px 20px;
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    overflow: hidden;
    animation: gradientShift 12s ease infinite, fadeInHeader 1.5s ease-out forwards;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  }

  /* Animasi gradient background */
  @keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* Logo Container */
  .logo-container {
    margin-bottom: 20px;
  }

  .tech-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    padding: 12px;
    box-shadow: 0 0 20px rgba(0, 215, 255, 0.5);
    animation: pulse 3s infinite;
  }

  .tech-svg {
    width: 100%;
    height: 100%;
    fill: none;
    stroke: #fff;
    stroke-width: 1.5;
    stroke-linejoin: round;
    stroke-linecap: round;
    animation: drawSVG 3s ease-in-out forwards;
  }

  @keyframes drawSVG {
    0% { stroke-dasharray: 100; stroke-dashoffset: 100; }
    70% { stroke-dasharray: 100; stroke-dashoffset: 0; }
    100% { stroke-dasharray: 0; stroke-dashoffset: 0; }
  }

  @keyframes pulse {
    0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(0, 215, 255, 0.7); }
    70% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(0, 215, 255, 0); }
    100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(0, 215, 255, 0); }
  }

  /* Tech Particles */
  .tech-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    pointer-events: none;
  }

  .tech-particles::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
      radial-gradient(rgba(255, 255, 255, 0.15) 2px, transparent 2px),
      radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 30px 30px, 15px 15px;
    background-position: 0 0, 15px 15px;
    animation: particleFloat 40s linear infinite;
  }

  @keyframes particleFloat {
    0% { background-position: 0 0, 15px 15px; }
    100% { background-position: 100px 100px, 115px 115px; }
  }

  /* Keyframes untuk fadeIn animasi */
  @keyframes fadeInHeader {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }

  /* Animasi untuk Judul */
  .hero-container {
    position: relative;
    z-index: 2;
  }

  .hero-container h1 {
    font-size: 48px;
    font-weight: 800;
    letter-spacing: -0.5px;
    margin-bottom: 15px;
    opacity: 0;
    transform: translateY(-20px);
    animation: slideUp 1s ease-out forwards 0.5s;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  }

  /* Keyframes untuk slideUp animasi */
  @keyframes slideUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Efek Highlight untuk teks span */
  .highlight-text {
    background: linear-gradient(120deg, #00f2fe, #4facfe);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    position: relative;
    display: inline-block;
  }

  .highlight-text::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #00f2fe, #4facfe);
    animation: widthExpand 1.5s ease-out forwards 1.5s;
  }

  @keyframes widthExpand {
    to {
      width: 100%;
    }
  }

  /* Animasi untuk Subtitle */
  .hero-subtitle {
    font-size: 18px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease-out forwards 1s;
    max-width: 600px;
    margin: 0 auto;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 300;
  }

  /* Keyframes untuk fadeInUp animasi */
  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsif untuk perangkat kecil */
  @media (max-width: 768px) {
    .hero-header {
      padding: 60px 15px;
    }
    
    .tech-icon {
      width: 50px;
      height: 50px;
      padding: 10px;
    }
    
    .hero-container h1 {
      font-size: 32px;
    }

    .hero-subtitle {
      font-size: 16px;
    }
  }
</style>