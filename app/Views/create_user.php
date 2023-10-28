<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>
<center>
<div class="containers">
  <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>
  <form class="form" action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data">
  <label for="upload">Foto</label>
  <input type="file" id="myFile" name="foto">
  <label for="fname">Nama:</label><br>
  <input class="<?= (empty(validation_show_error('nama')))?'':'is_valid'?>" type="text" id="nama" name="nama"><br>
  <div class="invalid-feedback">
    <?= validation_show_error('nama')?>
  </div>
  <label for="lname">NPM:</label><br>
  <input class="<?= (empty(validation_show_error('npm')))?'' : 'is-invalid'?>"type="text" id="npm" name="npm"><br>
  <div class="invalid-feedback">
  <?= validation_show_error('npm') ?><br>
  </div>
  <label for="lname">Kelas:</label><br>
  <select name="kelas" id="kelas">
    <?php 
    foreach ($kelas as $item){
    ?>
        <option value="<?= $item['id']?>">
        <?= $item['nama_kelas'] ?>  
      </option>  
    <?php
    }
    ?>
  </select><br><br>
  <input type="submit" value="Submit">
</form>
</div>
</center>
</div>
<?= $this->endSection();