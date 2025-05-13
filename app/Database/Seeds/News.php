<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        		// membuat data
				$news_data = [
					[
						'title' => 'Peluncuran Resmi iPhone 15 di Indonesia',
						'slug'  => 'peluncuran-iphone-15',
						'content' => 'Apple resmi meluncurkan iPhone 15 dengan desain baru dan peningkatan performa.'
					],
					[
						'title' => 'Kecerdasan Buatan Semakin Canggih',
						'slug' => 'ai-semakin-canggih',
						'content' => 'Pengembangan AI kini mampu menghasilkan gambar dan teks yang menyerupai buatan manusia.'
					],
					[
						'title' => 'Startup Teknologi Lokal Raup Pendanaan Seri A',
						'slug' => 'startup-lokal-seri-a',
						'content' => 'Salah satu startup teknologi Indonesia mendapat pendanaan sebesar 5 juta dolar AS untuk ekspansi.'
					]
				];
				

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('news')->insert($data);
		}
    }
}
