
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Selamat Datang di SIAKAD ITM</h2>

<p>
    Sistem Informasi Akademik Institut Teknologi Mojosari
    merupakan aplikasi untuk menampilkan informasi akademik
    seperti data mahasiswa, dosen, dan mata kuliah.
</p>

<h3 style="margin-top: 25px;">Menu Akademik</h3>

<div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">

    <div style="background: #e8f1fb; padding: 20px; border-radius: 8px; flex: 1; min-width: 180px;">
        <h3>Mahasiswa</h3>
        <p>Informasi data mahasiswa.</p>
        <a href="<?= site_url('mahasiswa') ?>">Lihat Data</a>
    </div>

    <div style="background: #e8f1fb; padding: 20px; border-radius: 8px; flex: 1; min-width: 180px;">
        <h3>Dosen</h3>
        <p>Informasi data dosen.</p>
        <a href="<?= site_url('dosen') ?>">Lihat Data</a>
    </div>

    <div style="background: #e8f1fb; padding: 20px; border-radius: 8px; flex: 1; min-width: 180px;">
        <h3>Mata Kuliah</h3>
        <p>Informasi mata kuliah.</p>
        <a href="<?= site_url('mata-kuliah') ?>">Lihat Data</a>
    </div>

</div>

<?= $this->endSection() ?>
