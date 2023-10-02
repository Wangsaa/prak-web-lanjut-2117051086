<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['nama']?></td>
                    <td><?= $user['npm']?></td>
                    <td><?= $user['nama_kelas']?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection();