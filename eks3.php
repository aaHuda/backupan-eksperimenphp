<?php 
  
  $mahasiswa = [
                [
                "nama" => "M.hudayana",
                "kelas" => "10",
                "jurusan" => "XTJKT"
                ],
                [
                  "nama" => "anto",
                  "kelas" => "10",
                  "jurusan" => "XTJKT"
                ],
                [
                  "nama" => "binciling",
                  "kelas" => "10",
                  "jurusan" => "XTJKT"
                ]
              ];
  
  if(isset($_POST["eks2"])) {
    header("Location: eks2.php");
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pengulangan</title>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <td>No.</td>
    <td>Nama</td>
    <td>Kelas</td>
    <td>Jurusan</td>
  </tr>
  
  <?php $i = 1; ?>
  <?php foreach($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $mhs["nama"]; ?></td>
      <td><?= $mhs["kelas"]; ?></td>
      <td><?= $mhs["jurusan"]; ?></td>
    </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
  </table><br>
  <form action="" method="post">
    <button name="eks2">eks2</button>
  </form>
</body>
</html>