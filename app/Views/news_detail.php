<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<style>
    .news-detail-container {
        max-width: 900px;
        margin: 2rem auto;
        padding: 2.5rem;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
        font-family: 'Roboto', sans-serif;
    }

    .news-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #2c3e50;
        line-height: 1.4;
        margin-bottom: 1rem;
        text-align: center;
    }

    .news-meta {
        font-size: 1rem;
        color: #7f8c8d;
        margin-bottom: 2rem;
        text-align: center;
    }

    .news-content {
        font-size: 1.2rem;
        color: #34495e;
        line-height: 1.8;
        text-align: justify;
        letter-spacing: 0.5px;
        margin-bottom: 2rem;
    }

    .news-content p {
        margin-bottom: 1.5rem; /* Menambahkan jarak antar paragraf */
        text-indent: 1.5rem; /* Untuk indentasi pada paragraf pertama */
    }

    .news-content ul {
        list-style-type: disc;
        margin-left: 2rem;
        margin-bottom: 1.5rem;
    }

    .news-content ol {
        list-style-type: decimal;
        margin-left: 2rem;
        margin-bottom: 1.5rem;
    }

    .news-content blockquote {
        background-color: #ecf0f1;
        border-left: 5px solid #2980b9;
        padding: 15px 25px;
        font-style: italic;
        margin: 1.5rem 0;
        font-size: 1.1rem;
        color: #2c3e50;
    }

    .news-content img {
        max-width: 100%;
        border-radius: 8px;
        margin: 1.5rem 0;
    }
</style>

<div class="news-detail-container">
    <h2 class="news-title"><?= esc($news['title']) ?></h2>
    <div class="news-meta">
        Dipublikasikan pada: <?= date('d M Y', strtotime($news['created_at'])) ?>
    </div>
    <div class="news-content">
        <?= $news['content'] ?>
    </div>
</div>

<?= $this->endSection() ?>
