<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Data Dosen</h2>
<p>Berikut merupakan daftar dosen Institut Teknologi Mojosari.</p>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>012345</td>
            <td>Dr. Ahmad</td>
            <td>Sistem Informasi</td>
        </tr>
        <tr>
            <td>2</td>
            <td>067890</td>
            <td>Rina, M.Kom.</td>
            <td>Sistem Informasi</td>
        </tr>
    </tbody>
</table>
<?= $this->endSection() ?>
