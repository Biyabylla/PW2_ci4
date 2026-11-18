<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Edit Data Dosen</h2>
<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>
<form action="<?= site_url('dosen/update/' . $dosen['id']) ?>" method="post">
    <?= csrf_field() ?>
    <p>
        <label>NIDN</label><br>
        <input
            type="text"
            name="nidn"
            value="<?= old('nidn', $dosen['nidn']) ?>"
            required
        >
    </p>
    <p>
        <label>Nama Dosen</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama', $dosen['nama']) ?>"
            required
        >
    </p>
    <p>
        <label>Email</label><br>
        <input
            type="email"
            name="email"
            value="<?= old('email', $dosen['email']) ?>"
            required
        >
    </p>
    <p>
        <label>Program Studi</label><br>
        <input
            type="text"
            name="prodi"
            value="<?= old('prodi', $dosen['prodi']) ?>"
            required
        >
    </p>
    <button type="submit">Perbarui</button>
    <a href="<?= site_url('dosen') ?>">Kembali</a>
</form>
<?= $this->endSection() ?>