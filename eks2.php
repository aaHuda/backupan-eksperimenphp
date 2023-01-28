<?php 
  $mhs = [
          ["hudayana", "tjkt", "10",],
          ["fajar", "tkl", "10"],
          ["april", "tkr", "10"]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nama-nama buah</title>
</head>
<body>
  <?php foreach($mhs as $mhs) : ?>
    <ul>
      <li>nama :<?= $mhs[0]; ?></li>
      <li>Jurusan :<?= $mhs[1]; ?></li>
      <li>kelas :<?= $mhs[2]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>