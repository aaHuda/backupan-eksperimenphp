<?php 
  if(isset($_POST["submit"])) {
    if(isset($_POST["username"]) && ($_POST["password"])) {
      echo "dibawah ini adalah data anda :";
      echo "<br>";
      echo "Username : " . $_POST["username"];
      echo "<br>";
      echo "Password :  " . $_POST["password"];
    }
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
      <input type="text" name="username" id="username" autofocus required><br><br>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" required><br><br>
      <button name="submit">kirim</button>
    </form>
    <script src="js/sweetalert2.all.min.js"></script>
    <?php 
  if(isset($_POST["submit"])):?>
    <?php if(isset($_POST["username"]) && isset($_POST["password"])) : ?>
    <script>
      Swal.fire(
        'Halo <?php echo $_POST["username"]; ?>',
        'Selamat datang di website kami😜🤚',
        'success'
      );
    </script>
    <?php endif; ?>
    <?php endif; ?>
</html>