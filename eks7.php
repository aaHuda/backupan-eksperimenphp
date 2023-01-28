<?php 
  require 'eks5.php';
  
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>coba-coba</title>
  <style>
    body {
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
      flex-direction:column;
    }
  </style>
</head>
<body>
  <h1>Daftar mahasiswa</h1>
  
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>NRP</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $mhs): ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $mhs["gambar"]; ?></td>
      <td><?= $mhs["Nama"]; ?></td>
      <td><?= $mhs["nrp"]; ?></td>
      <td><?= $mhs["email"]; ?></td>
      <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>