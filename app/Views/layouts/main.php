<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - CI4 Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <?= $this->renderSection('styles') ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">CI4 Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <p class="mb-0">&copy; <?= date('Y') ?> CI4 Bootstrap. Dibuat dengan CodeIgniter 4 &amp; Bootstrap 5</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
