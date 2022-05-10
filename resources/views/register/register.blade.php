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
          <a href="/index"><h2 class="inactive underlineHover">Home </h2></a>
          <a href="/login"><h2 class="inactive underlineHover">Login </h2></a>
          <a href="/register"><h2 class="inactive underlineHover">Register </h2></a>

          <!-- Icon -->
          <div class="fadeIn first">
            <img src="logo.png" alt="User Icon" width="300px"/>
          </div>

          <!-- Login Form -->
          <form action="register.php" method="post">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">

            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">

            <input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama">

            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">

            <!-- <input type="text" id="notelp" class="fadeIn second" name="notelp" placeholder="No. Telp"> -->

            <input type="submit" class="fadeIn fourth" value="Register">
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
