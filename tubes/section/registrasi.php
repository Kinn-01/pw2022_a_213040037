<?php 
require 'function.php';

$conn = koneksi();
if (isset($_POST["register"])) {

    if ( registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                document.location.href =
        'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- mhy css -->
    <link rel="stylesheet" href="../css/style2.css" />

    <link rel="icon" href="../img/2.jpg">

    <title>Halaman Registrasi</title>
</head>
<body>
    <!-- Navbar -->

<form action="" method="POST">
    <div class="login-box">
  <h1>Registrasi</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="password" placeholder="Password">
  </div>

  <button type="submit" name="register" class="btn" value="Sign in">Register</button>
</div>
</form>


    <!-- Akhir -->


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>