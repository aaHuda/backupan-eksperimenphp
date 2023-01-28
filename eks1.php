<?php
  
  $guru = [
    [ "nama" => "mhudayana",
      "jabatan" => "guru matematika",
      "umur" => "25",
      "sekolah" => "smkn 4 jakarta"
    ],
    [ "nama" => "anotireng",
      "jabatan" => "guru kuli",
      "umur" => "24",
      "sekolah" => "smkn 4 jakarta"
    ],
    [ "nama" => "cin bin ling",
      "jabatan" => "guru cina",
      "umur" => "23",
      "sekolah" => "smkn 4 jakarta"
    ]
  ]
  
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
    <h1>daftar-daftar guru</h1>
    
    
    <?php foreach( $guru as $gr ) : ?>
      <ul>
        <li><?php echo $gr["nama"] ?></li>
        <li><?php echo $gr["jabatan"] ?></li>
        <li><?php echo $gr["umur"] ?></li>
        <li><?php echo $gr["sekolah"] ?></li>
        <?php echo $gr["nama"] ?>
      </ul>
    <?php endforeach; ?>
    <a href="">kembali ke home</a>
    
  </body>
  </html>