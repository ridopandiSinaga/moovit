<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test2.css">
    <link rel="icon" href="icontitle.png" type="image/icon type">
    <title>Moovit</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <a href="/login"><h2 class="inactive underlineHover">Login </h2></a>
          <h2 class="active">Register </h2>

          <!-- Icon -->
          <div class="fadeIn first">
            <img src="logo.png" alt="User Icon" width="300px"/>
          </div>

          <!-- Login Form -->
          <!-- <form action="register.php" method="post"> -->

          <?php
                                // $username = $_POST['username'];
                                // $password = $_POST['password'];
                                // $nama = $_POST['nama'];
                                // $email = $_POST['email'];

                                // $sql = "INSERT INTO member1 (username,password,nama,email) VALUES ('$username','$password','$nama','$email')";

                                // if($koneksi->query($sql)===TRUE){
                                //     echo"<h5>Registrasi Akun Anda Berhasil !</h5>";
                                // } else{
                                //     echo"terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                // }

                                // $koneksi->close();

            ?>

            <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">

            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">

            <input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama">

            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">

            <!-- <input type="text" id="notelp" class="fadeIn second" name="notelp" placeholder="No. Telp"> -->

            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>

          <!-- Remind Passowrd
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
        -->

        </div>
      </div>
</body>
</html>
