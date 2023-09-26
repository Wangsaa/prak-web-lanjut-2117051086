<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img{
            width: 20%;
            margin-top: 10%;
            border-radius: 50%;
        }
        .table{
            margin-top: 1%;
        }
    </style>
</head>
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
</body>
</html>