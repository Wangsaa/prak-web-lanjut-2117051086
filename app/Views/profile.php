<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>
<body>
    <center>
    <img class="img" src="<?= $user['foto'] ?? '<default-foto>'?>" alt="">
    <table class="table">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $user['nama'] ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?= $user['nama_kelas'] ?></td>
    </tr>
    <tr>
        <td>NPM</td>
        <td>:</td>
        <td><?= $user['npm'] ?></td>
    </tr>
    </table>
    </center>
    </div>
<?= $this->endSection();