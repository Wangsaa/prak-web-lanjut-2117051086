<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div class="container">
    <a href="<?= base_url("/user/create") ?>"class="btn btn-primary mb-3">Tambah Data</a>
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
                    <td>
                    <div class="btn-group" role="group">
                    <a href="<?= base_url('user/' . $user['id']) ?>"class="btn btn-info btn-sm me-1">Detail</a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>"class="btn btn-warning btn-sm me-1">Edit</a>

                 <form action="<?= base_url('user/' . $user['id'])?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field()?>
                    <button type="submit"class="btn btn-danger btn-sm">Delete</button>
                </form>
                    </div>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>
</div>
<?= $this->endSection();