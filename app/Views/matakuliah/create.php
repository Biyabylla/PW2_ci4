<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Tambah Mata Kuliah</h2>
<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>
<form action="<?= site_url('matakuliah/store') ?>" method="post">
    <?= csrf_field() ?>
    <p>
        <label>Kode Mata Kuliah</label><br>
        <input
            type="text"
            name="kode_mk"
            value="<?= old('kode_mk') ?>"
            required
        >
    </p>
    <p>
        <label>Nama Mata Kuliah</label><br>
        <input
            type="text"
            name="nama_mk"
            value="<?= old('nama_mk') ?>"
            required
        >
    </p>
    <p>
        <label>Jumlah SKS</label><br>
        <input
            type="number"
            name="sks"
            min="1"
            max="6"
            value="<?= old('sks') ?>"
            required
        >
    </p>
    <p>
        <label>Semester</label><br>
        <input
            type="number"
            name="semester"
            min="1"
            max="8"
            value="<?= old('semester') ?>"
            required
        >
    </p>
    <button type="submit">Simpan</button>
    <a href="<?= site_url('matakuliah') ?>">Kembali</a>
</form>
<?= $this->endSection() ?>