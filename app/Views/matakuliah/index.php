
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>

<p>Berikut merupakan daftar mata kuliah Program Studi Sistem Informasi.</p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>SI101</td>
            <td>Pemrograman Web</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>SI102</td>
            <td>Sistem Informasi</td>
            <td>3</td>
        </tr>
        <tr>
            <td>3</td>
            <td>SI103</td>
            <td>Basis Data</td>
            <td>3</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>
