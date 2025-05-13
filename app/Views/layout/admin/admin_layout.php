<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Berita Codeigniter</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <?= $this->include('layout/admin/navbar') ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <p>&copy; <?= date('Y') ?> <strong>TechConnect</strong>. All rights reserved.</p>
        </div>
    </footer>

    <!-- CSS FOOTER -->
    <style>
        .footer {
            background: linear-gradient(to right, #1e3c72, #2a5298); /* gradasi biru */
            padding: 20px 0;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            font-size: 14px;
            margin-top: 60px;
        }

        .footer-container {
            text-align: center;
            max-width: 960px;
            margin: 0 auto;
        }

        .footer strong {
            color: #ffd700; /* emas untuk branding */
        }
    </style>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
