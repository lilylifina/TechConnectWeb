<?= $this->extend('layout/layout_landingpage') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="faq-header text-center mb-5">
                <h1 class="display-5 fw-bold gradient-text">Frequently Asked Questions</h1>
                <div class="tech-line mx-auto"></div>
            </div>
            
            <?php foreach ($data_faqs as $faq) : ?>
                <div class="faq-item fade-in">
                    <div class="tech-accent"></div>
                    <div class="tech-dot"></div>
                    <h2 class="h2"><?= $faq['question'] ?></h2>
                    <p class="faq-answer"><?= $faq['answer'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<!-- Add CSS for Animations and Styling -->
<style>
    /* Modern Tech Background */
 
    
    /* Tech Header Styling */
    .faq-header {
        position: relative;
        padding-bottom: 1rem;
    }
    
    
    
    /* Keyframe for Fade-in and Slide-up Animation */
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .faq-answer {
        font-size: 1rem;
        color: #596780;
        line-height: 1.7;
        margin-top: 10px;
        padding-left: 26px;
        position: relative;
    }
    
    /* Tech-style hover effect for FAQ item */
    .faq-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(30, 60, 114, 0.12);
        border-color: rgba(74, 144, 226, 0.3);
    }
    
    .faq-item:hover .tech-dot {
        background-color: #1e3c72;
        box-shadow: 0 0 0 4px rgba(74, 144, 226, 0.2);
        animation: pulse 1.5s infinite;
    }
    
  
</style>

<!-- Google Fonts (Poppins) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">