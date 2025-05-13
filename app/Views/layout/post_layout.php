<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal Berita CodeIgniter</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Custom CSS -->
	<style>
	
		/* Sidebar */
		.sidebar {
			background-color: #fff;
			border: 1px solid #ddd;
			padding: 1rem;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			margin-top: 35px; /* Adding margin-top to push recent post down */
		}

		/* Footer */
		.footer {
			background-color: #343a40;
			color: #ffffff;
			padding: 2rem 0;
			text-align: center;
		}

		.footer a {
			color: #ffffff;
			text-decoration: none;
		}

		.footer a:hover {
			color: #ffc107;
		}

		/* Card News */
		.news-card {
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			padding: 1.5rem;
			margin-bottom: 2rem;
			transition: all 0.3s ease;
		}

		.news-card:hover {
			transform: translateY(-4px);
			box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
		}

		.news-title {
			font-size: 1.8rem;
			font-weight: bold;
			color: #343a40;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.news-title:hover {
			color:rgb(2, 64, 189);
		}

		.news-snippet {
			color: #6c757d;
			font-size: 1rem;
			line-height: 1.6;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.header h1 {
				font-size: 2rem;
			}
			.news-card {
				padding: 1rem;
			}
		}
	</style>
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <?= $this->include('layout/sidebar') ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

	<!-- Jquery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
