<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view("about");
	}
    
    public function contact()
	{
		$data['name'] = "TechConnect";
	    echo view("contact", $data);
	}
    
    public function faqs()
	{
    // Membuat data untuk dikirim ke view
    $data['data_faqs'] = [
        [
            'question' => 'Apa itu TechConnect ?',
            'answer' => 'TechConnect adalah portal berita teknologi yang menyajikan informasi terkini tentang inovasi, perkembangan industri teknologi, serta review produk dan perangkat terbaru.'
        ],
        [
            'question' => 'Apa yang membedakan TechConnect dengan portal berita teknologi lainnya?',
            'answer' => 'Kami fokus pada konten yang mendalam dan berbasis riset, dengan tujuan memberikan wawasan yang lebih tajam dan bermanfaat bagi pembaca yang ingin selalu up-to-date tentang dunia teknologi.'
        ],
        [
            'question' => 'Siapa yang menulis artikel di TechConnect?',
            'answer' => 'Artikel di TechConnect ditulis oleh tim jurnalis dan kontributor ahli di bidang teknologi, serta para profesional yang berpengalaman di industri teknologi dan inovasi.'
        ],
        [
            'question' => 'Bagaimana cara berlangganan berita terbaru dari TechConnect?',
            'answer' => 'Pengguna dapat berlangganan untuk menerima newsletter terbaru kami dengan mengisi formulir langganan yang tersedia di halaman utama atau footer website.'
        ],
        [
            'question' => 'Apakah TechConnect menyediakan artikel dalam bahasa selain Indonesia?',
            'answer' => 'Saat ini, sebagian besar konten kami tersedia dalam bahasa Indonesia. Namun, kami juga sedang mengembangkan konten dalam bahasa Inggris untuk menjangkau pembaca internasional.'
        ],
        [
            'question' => 'Apakah TechConnect menerima artikel dari kontributor luar?',
            'answer' => 'Kami terbuka untuk kontribusi dari penulis dan profesional di industri teknologi. Jika Anda tertarik untuk mengirimkan artikel, silakan kunjungi halaman "Kontak Kami" untuk informasi lebih lanjut.'
        ]
    ];

    // Load view dengan data
    echo view("faqs", $data);
}


}