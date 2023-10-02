<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>
<body>
    <center>
    <img class="img" src="<?=base_url()?>messi.jpg" alt="SIUUUr">
    <table class="table">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?= $kelas ?></td>
    </tr>
    <tr>
        <td>NPM</td>
        <td>:</td>
        <td><?= $npm ?></td>
    </tr>
    </table>
    </center>
    </div>
<?= $this->endSection();