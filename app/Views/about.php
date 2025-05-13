<?= $this->extend('layout/layout_landingpage') ?>

<?= $this->section('content') ?>

<div class="container py-5 mt-4">
    <div class="text-center mb-5">
        <h2 class="section-title">Tentang Kami</h2>
        <p class="section-subtitle">Portal berita teknologi yang menyajikan informasi terkini dan tren digital untuk membantu Anda tetap terdepan.</p>
    </div>
    
    <div class="row g-4 mb-5">
        <div class="col-lg-6">
            <div class="content-card h-100">
                <h3 class="section-header">Visi Kami</h3>
                <p class="visi-misi">Menjadi sumber terpercaya bagi mereka yang ingin terus berkembang di dunia teknologi. Kami berkomitmen untuk memberikan informasi yang akurat dan terbaru, agar pengunjung selalu mendapatkan wawasan baru setiap hari.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="content-card h-100">
                <h3 class="section-header">Misi Kami</h3>
                <p class="visi-misi">Memberikan berita teknologi yang relevan dan terkini. Mendorong komunitas untuk terus belajar, berinovasi, dan memanfaatkan pengetahuan teknologi dalam kehidupan sehari-hari. Kami ingin membuka peluang bagi inovasi teknologi yang bisa mengubah masa depan.</p>
            </div>
        </div>
    </div>

    <div class="team-section">
        <h3 class="section-header text-center mb-4">Tim Kami</h3>
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <div class="team-img-container">
                        <img src="<?= base_url('gambar/gambar1.jpg') ?>" class="team-img" alt="John Doe">
                    </div>
                    <div class="team-details">
                        <h5 class="team-name">John Doe</h5>
                        <p class="team-role">Editor & Content Creator</p>
                        <div class="team-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <div class="team-img-container">
                        <img src="<?= base_url('gambar/gambar2.jpg') ?>" class="team-img" alt="Jane Smith">
                    </div>
                    <div class="team-details">
                        <h5 class="team-name">Jane Smith</h5>
                        <p class="team-role">Tech Writer & Researcher</p>
                        <div class="team-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mx-auto">
                <div class="team-card">
                    <div class="team-img-container">
                        <img src="<?= base_url('gambar/gambar3.jpg') ?>" class="team-img" alt="Alex Johnson">
                    </div>
                    <div class="team-details">
                        <h5 class="team-name">Alex Johnson</h5>
                        <p class="team-role">Developer & Tech Enthusiast</p>
                        <div class="team-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-section text-center mt-5">
        <a href="<?= base_url('contact') ?>" class="btn-primary">Gabung dengan Kami</a>
    </div>
</div>

<style>
    /* Modern Typography */
    .section-title {
        font-weight: 700;
        color: #2F3C87; /* Changed to match navbar color */
        font-size: 2.5rem;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
        position: relative;
        display: inline-block;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto 40px;
        font-weight: 400;
        line-height: 1.6;
    }

    .section-header {
        font-size: 1.6rem;
        font-weight: 600;
        color: #2F3C87; /* Changed to match navbar color */
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 3px;
        background: #62C9D5; /* Secondary color from TechConnect logo */
        bottom: -5px;
        left: 0;
        border-radius: 2px;
    }
    
    .text-center .section-header::after {
        left: 50%;
        transform: translateX(-50%);
    }

    /* Content Cards */
    .content-card {
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border-left: 4px solid #2F3C87; /* Changed to match navbar color */
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        border-right: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
    }

    .content-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .visi-misi {
        text-align: justify;
        font-size: 1rem;
        color: #495057;
        line-height: 1.8;
    }

    /* Team Cards */
    .team-section {
        margin-top: 80px;
    }

    .team-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .team-img-container {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
    }

    .team-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover .team-img {
        transform: scale(1.08);
    }

    .team-details {
        padding: 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .team-name {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2F3C87; /* Changed to match navbar color */
        margin-bottom: 5px;
    }

    .team-role {
        font-size: 0.95rem;
        color: #6c757d;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(45deg, #2F3C87, #62C9D5); /* Changed to match TechConnect colors */
        color: white;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        transform: translateY(-3px) rotate(5deg);
        box-shadow: 0 5px 15px rgba(47, 60, 135, 0.3); /* Changed to match navbar color */
    }

    /* CTA Button */
    .cta-section {
        margin-top: 80px;
    }

    .btn-primary {
        display: inline-block;
        background: linear-gradient(45deg, #2F3C87, #62C9D5); /* Changed to match TechConnect colors */
        color: white;
        padding: 14px 38px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 10px 20px rgba(47, 60, 135, 0.3); /* Changed to match navbar color */
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btn-primary:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background: linear-gradient(45deg, #62C9D5, #2F3C87); /* Reversed gradient */
        transition: all 0.4s ease;
        z-index: -1;
    }

    .btn-primary:hover {
        box-shadow: 0 15px 25px rgba(47, 60, 135, 0.4); /* Changed to match navbar color */
        transform: translateY(-3px);
    }

    .btn-primary:hover:before {
        width: 100%;
    }

    /* Responsive Styles */
    @media (max-width: 991.98px) {
        .section-title {
            font-size: 2.2rem;
        }

        .section-header {
            font-size: 1.4rem;
        }

        .content-card {
            padding: 20px;
        }
    }

    @media (max-width: 767.98px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .team-card {
            max-width: 320px;
            margin: 0 auto;
        }
    }

    @media (max-width: 575.98px) {
        .section-title {
            font-size: 1.8rem;
        }
        
        .section-subtitle {
            font-size: 1rem;
        }
        
        .content-card {
            padding: 15px;
        }
        
        .visi-misi {
            font-size: 0.95rem;
        }
        
        .btn-primary {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }

    /* Background Elements */
    .container {
        position: relative;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(98, 201, 213, 0.1) 0%, rgba(255, 255, 255, 0) 70%); /* Changed to match TechConnect color */
        z-index: -1;
        border-radius: 50%;
    }

    .container::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(47, 60, 135, 0.1) 0%, rgba(255, 255, 255, 0) 70%); /* Changed to match navbar color */
        z-index: -1;
        border-radius: 50%;
    }

    /* Add Font Awesome (Make sure to include the FontAwesome CDN in your layout file) */
    /* If not already included, add: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> */
</style>

<?= $this->endSection() ?>