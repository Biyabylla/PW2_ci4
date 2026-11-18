<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Data Mata Kuliah</h2>
<?php if (session()->getFlashdata('success')): ?>
    <p><?= esc(session()->getFlashdata('success')) ?></p>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>
<p>
    <a href="<?= site_url('matakuliah/create') ?>">+ Tambah Mata Kuliah</a>
</p>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($matakuliah)): ?>
            <tr>
                <td colspan="6">Data mata kuliah belum tersedia.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($matakuliah as $i => $mk): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($mk['kode_mk']) ?></td>
                    <td><?= esc($mk['nama_mk']) ?></td>
                    <td><?= esc($mk['sks']) ?></td>
                    <td><?= esc($mk['semester']) ?></td>
                    <td>
                        <a href="<?= site_url('matakuliah/edit/' . $mk['id']) ?>">Edit</a>

                        <form
                            action="<?= site_url('matakuliah/delete/' . $mk['id']) ?>"
                            method="post"
                            style="display:inline"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                        >
                            <?= csrf_field() ?>
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>