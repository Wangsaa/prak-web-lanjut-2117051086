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
<form class="form" action="<?= base_url('/user/store')?>" method="POST">
  <label for="fname">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="lname">NPM:</label><br>
  <input type="text" id="npm" name="npm"><br>
  <label for="lname">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas"><br><br>
  <input type="submit" value="Submit">
</form>
</div>
</center>
</body>
</html>