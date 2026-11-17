
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mahasiswa</h2>

<p>Berikut merupakan daftar mahasiswa Institut Teknologi Mojosari.</p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>23001</td>
            <td>Andi</td>
            <td>Sistem Informasi</td>
        </tr>
        <tr>
            <td>2</td>
            <td>23002</td>
            <td>Budi</td>
            <td>Sistem Informasi</td>
        </tr>
        <tr>
            <td>3</td>
            <td>23003</td>
            <td>Citra</td>
            <td>Sistem Informasi</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>
