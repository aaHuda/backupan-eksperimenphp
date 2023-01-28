<?php 
  $pass = 123;
  
  
  if(isset($_POST["login"])) {
    if($_POST["password"] == $pass) {
      echo "
      <script>
        alert('Selamat Datang Admin!');
        document.location.href = 'eks1.php';
      </script>";
    } else {
      echo "<script>alert('Password Salah!');</script>";
    }
  }
  
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>coba</title>
</head>
<body>
  <form method="post" action="">
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
    <button name="login">login</button>
  </form>
</body>
</html>