<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<style>
    .news-wrapper {
        max-width: 1100px;
        margin: 0 auto;
        padding: 3rem 1.5rem;
        position: relative;
        overflow: hidden;
    }
    
    /* Tech background elements */
    .news-wrapper::before {
        content: '';
        position: absolute;
        top: -300px;
        right: -200px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(13, 110, 253, 0.03) 0%, rgba(13, 110, 253, 0) 70%);
        border-radius: 50%;
        z-index: -1;
    }
    
    .news-wrapper::after {
        content: '';
        position: absolute;
        bottom: -200px;
        left: -200px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(25, 135, 184, 0.03) 0%, rgba(25, 135, 184, 0) 70%);
        border-radius: 50%;
        z-index: -1;
    }
    
    /* Modern section header */
    .section-header {
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
    }
    
    .tech-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }
    
    .tech-title span {
        background: linear-gradient(135deg, #0d6efd, #1098ad);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .title-decoration {
        position: relative;
        display: block;
        width: 80px;
        height: 4px;
        margin: 0 auto;
        background: linear-gradient(90deg, #0d6efd, #1098ad);
        border-radius: 2px;
    }
    
    .title-decoration::before {
        content: '';
        position: absolute;
        top: -3px;
        right: -3px;
        width: 10px;
        height: 10px;
        background-color: #0d6efd;
        border-radius: 50%;
        animation: pulseDot 2s infinite;
    }
    
    @keyframes pulseDot {
        0% { box-shadow: 0 0 0 0 rgba(13, 110, 253, 0.4); }
        70% { box-shadow: 0 0 0 8px rgba(13, 110, 253, 0); }
        100% { box-shadow: 0 0 0 0 rgba(13, 110, 253, 0); }
    }
    
    /* News card with tech style */
    .news-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        padding: 2.2rem 2.5rem;
        margin-bottom: 2.2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-left: 4px solid #0d6efd;
    }
    
    .news-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(135deg, rgba(240, 244, 248, 0.7), rgba(255, 255, 255, 0.9));
        z-index: -1;
    }
    
    .news-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, transparent 60%, rgba(13, 110, 253, 0.05) 60%);
        z-index: 0;
    }
    
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(13, 110, 253, 0.1);
    }
    
    .news-card-content {
        position: relative;
        z-index: 1;
    }
    
    /* Tech style circuit lines */
    .circuit-line {
        position: absolute;
        background: linear-gradient(90deg, rgba(13, 110, 253, 0.1), rgba(13, 110, 253, 0));
        height: 1px;
    }
    
    .circuit-line.top {
        top: 20px;
        right: 20px;
        width: 100px;
    }
    
    .circuit-line.bottom {
        bottom: 40px;
        left: 20px;
        width: 150px;
    }
    
    .circuit-dot {
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: rgba(13, 110, 253, 0.3);
    }
    
    .circuit-dot.top {
        top: 17.5px;
        right: 20px;
    }
    
    .circuit-dot.bottom {
        bottom: 37.5px;
        left: 20px;
    }
    
    .news-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 0.7rem;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .news-title::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background: linear-gradient(90deg, #0d6efd, #1098ad);
        transition: width 0.3s ease;
    }
    
    .news-title:hover {
        color: #0d6efd;
    }
    
    .news-title:hover::after {
        width: 100%;
    }
    
    .news-meta {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
    }
    
    .news-meta-icon {
        margin-right: 0.5rem;
        color: #0d6efd;
        font-size: 0.8rem;
    }
    
    .news-snippet {
        font-size: 1.05rem;
        color: #2d3748;
        line-height: 1.7;
        margin-bottom: 0.5rem;
    }
    
    .read-more {
        display: inline-flex;
        align-items: center;
        font-size: 0.95rem;
        color: #0d6efd;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
    }
    
    .read-more svg {
        width: 16px;
        height: 16px;
        margin-left: 6px;
        transition: transform 0.3s ease;
    }
    
    .read-more:hover {
        color: #0b5ed7;
    }
    
    .read-more:hover svg {
        transform: translateX(3px);
    }
    
    /* Empty state */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(135deg, rgba(240, 244, 248, 0.8), rgba(255, 255, 255, 0.9));
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.03);
        position: relative;
        overflow: hidden;
    }
    
    .empty-state::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 100px;
        height: 100px;
        background: radial-gradient(circle, rgba(13, 110, 253, 0.05) 0%, rgba(13, 110, 253, 0) 70%);
        border-radius: 50%;
    }
    
    .empty-state::after {
        content: '';
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 100px;
        height: 100px;
        background: radial-gradient(circle, rgba(25, 135, 184, 0.05) 0%, rgba(25, 135, 184, 0) 70%);
        border-radius: 50%;
    }
    
    .empty-state-icon {
        font-size: 2.5rem;
        color: #adbdcc;
        margin-bottom: 1rem;
    }
    
    .empty-state-text {
        font-size: 1.1rem;
        color: #64748b;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .news-card {
            padding: 1.8rem 2rem;
        }
        
        .tech-title {
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .news-title {
            font-size: 1.5rem;
        }
        
        .news-card {
            padding: 1.6rem 1.8rem;
        }
        
        .tech-title {
            font-size: 1.6rem;
        }
    }
</style>

<div class="news-wrapper">
    <div class="section-header">
        <h2 class="tech-title"><span>Berita Terkini</span></h2>
        <div class="title-decoration"></div>
    </div>

    <?php if (empty($newses)) : ?>
        <div class="empty-state">
            <div class="empty-state-icon">
                <i class="far fa-newspaper"></i>
            </div>
            <p class="empty-state-text">Belum ada berita yang diterbitkan.</p>
        </div>
    <?php else : ?>
        <?php foreach ($newses as $news) : ?>
            <div class="news-card">
                <div class="circuit-line top"></div>
                <div class="circuit-dot top"></div>
                <div class="circuit-line bottom"></div>
                <div class="circuit-dot bottom"></div>
                
                <div class="news-card-content">
                    <a href="/news/<?= $news['slug'] ?>" class="news-title"><?= esc($news['title']) ?></a>
                    <p class="news-meta">
                        <span class="news-meta-icon"><i class="far fa-calendar-alt"></i></span>
                        Dipublikasikan: <?= date('d M Y', strtotime($news['created_at'] ?? '')) ?>
                    </p>
                    <p class="news-snippet"><?= esc(substr($news['content'], 0, 180)) ?>...</p>
                    <a href="/news/<?= $news['slug'] ?>" class="read-more">
                        Baca selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif; ?>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<?= $this->endSection() ?>