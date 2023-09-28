<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<center>
<div class="containers">
  <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>
<form class="form" action="<?= base_url('/user/store')?>" method="POST">
  <label for="fname">Nama:</label><br>
  <input class="<?= (empty(validation_show_error('nama')))?'':'is_valid'?>" type="text" id="nama" name="nama"><br>
  <div class="invalid-feedback">
    <?= validation_show_error('nama')?>
  </div>
  <label for="lname">NPM:</label><br>
  <input class="<?= (empty(validation_show_error('npm')))?'' : 'is-invalid'?>"type="text" id="npm" name="npm"><br>
  <div class="invalid-feedback">
  <?= validation_show_error('npm') ?><br>
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
</body>
</html>