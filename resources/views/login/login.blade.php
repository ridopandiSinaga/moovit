<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test1.css">
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


 <?php
//     if(isset($_POST['btnlogin']))
//     {
//         require ("koneksi.php");
//         $user_login=$_POST['username'];
//         $pass_login=$_POST['password'];
//         $sql = "SELECT * FROM member1 WHERE username= '{$user_login}' and password= '{$pass_login}'";
//         $query = mysqli_query($koneksi,$sql);

//         while ($row = mysqli_fetch_array($query)){
//             $user = $row['username'];
//             $pass = $row['password'];
//             $nama = $row['nama'];
//             $email = $row['email'];
//             $level = $row['level'];
//         }
//         if($user_login == $user && $pass_login == $pass && $level == admin){
//             header("location:admin.php");
//             $_SESSION['username'] = $user;
//             $_SESSION['nama'] = $nama;
//             $_SESSION['email'] = $email;
//             $_SESSION['level'] = $level;


//         }else if($user_login == $user && $pass_login == $pass && $level == user){
//             header("location:dashboard.html");
//             $_SESSION['username'] = $user;
//             $_SESSION['nama'] = $nama;
//             $_SESSION['email'] = $email;
//             $_SESSION['level'] = $level;


//         }else if($user_login == $user && $pass_login == $pass && $level == 0){
//             header("location:dashboard.html");
//             $_SESSION['username'] = $user;
//             $_SESSION['nama'] = $nama;
//             $_SESSION['email'] = $email;
//             $_SESSION['level'] = $level;


//         }else{
//             echo"username tidak ditemukan !";
//         }
//     }

 ?>

          <!-- Login Form -->
          <form action="" method="POST">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
            <!-- <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email"> -->
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In" name="btnlogin">
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
