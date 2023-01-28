<?php 
  if(isset($_POST["submit"])) {
    // cek apakah username dan password sudah diisi
    if(isset($_POST["username"]) && isset($_POST["password"])){
      echo "Dibawah ini Adalah Data Anda:";
      echo "<br>";
      echo "Username :" .  $_POST["username"];
      echo "<br>";
      echo "Password :" . $_POST["password"];
    }
  } else {
    echo "Belum Ada Data Anda!";
  }
  
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
    <h1>Masukan Data Anda</h1>
    <form method="post" action="">
      <label for="username">Username :</label>
      <input type="text" name="username" id="username" autofocus><br><br>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password"><br><br>
      <button name="submit">kirim</button>
    </form>
</body>
</html>