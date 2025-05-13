<div class="card mb-4">
    <div class="card-body">
        <h5 class="h5">Recent Posts</h5>
        <hr>
        <div class="list-group list-group-flush">
            <?php 
            $posts = [
                [
                    'title' => 'Mengenal GPT-4: Masa Depan Kecerdasan Buatan',
                    'date' => '01 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=1',
                    'read_time' => 'baca 3 menit',
                    'link' => '#'
                ],
                [
                    'title' => '5 Tren Teknologi Web 2025 yang Harus Kamu Ketahui',
                    'date' => '02 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=2',
                    'read_time' => 'baca 4 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Cara Kerja Quantum Computing Secara Sederhana',
                    'date' => '03 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=3',
                    'read_time' => 'baca 5 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Perbandingan Framework: React vs Vue vs Angular',
                    'date' => '04 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=4',
                    'read_time' => 'baca 4 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Membangun Aplikasi Mobile dengan Flutter 3',
                    'date' => '05 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=5',
                    'read_time' => 'baca 6 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Tips Optimasi SEO di Tahun 2025',
                    'date' => '06 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=6',
                    'read_time' => 'baca 3 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Mengenal Dunia DevOps dan CI/CD',
                    'date' => '07 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=7',
                    'read_time' => 'baca 5 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Apa Itu Metaverse dan Dampaknya untuk Dunia Nyata?',
                    'date' => '08 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=8',
                    'read_time' => 'baca 4 menit',
                    'link' => '#'
                ],
                [
                    'title' => 'Langkah Mudah Belajar Machine Learning dari Nol',
                    'date' => '09 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=9',
                    'read_time' => 'baca 6 menit',
                    'link' => '#'
                ],
                [
                    'title' => '10 Bahasa Pemrograman Terpopuler 2025',
                    'date' => '10 Mei 2025',
                    'image' => 'https://picsum.photos/60/60?random=10',
                    'read_time' => 'baca 4 menit',
                    'link' => '#'
                ]
            ];

            foreach ($posts as $post): ?>
                <div class="media mb-4 pb-2 border-bottom">
                    <img class="rounded mr-3" src="<?= $post['image'] ?>" width="60" height="60" alt="Thumbnail">
                    <div class="media-body">
                        <h6 class="mt-0 mb-1 h6">
                            <a href="<?= $post['link'] ?>" class="text-dark" style="text-decoration: none;">
                                <?= $post['title'] ?>
                            </a>
                        </h6>
                        <small class="text-muted"><?= $post['date'] ?> · <?= $post['read_time'] ?></small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

