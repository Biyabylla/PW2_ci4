
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'SIAKAD ITM') ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }
        header {
            background: #1e3a5f;
            color: white;
            padding: 25px;
            text-align: center;
        }
        nav {
            background: #294d75;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffd166;
        }
        main {
            max-width: 1000px;
            min-height: 400px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
        }
        h2 {
            margin-bottom: 20px;
            color: #1e3a5f;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background: #1e3a5f;
            color: white;
        }
        footer {
            background: #1e3a5f;
            color: white;
            text-align: center;
            padding: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIAKAD ITM</h1>
        <p>Sistem Informasi Akademik Institut Teknologi Mojosari</p>
    </header>
    <nav>
        <a href="<?= site_url('/') ?>">Beranda</a>
        <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= site_url('dosen') ?>">Dosen</a>
        <a href="<?= site_url('mata-kuliah') ?>">Mata Kuliah</a>
        <a href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; 2026 SIAKAD ITM. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>