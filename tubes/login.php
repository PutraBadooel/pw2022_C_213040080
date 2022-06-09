<?php 
session_start();
require 'functions.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = koneksi();
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            //cek role admin
            if ($row['role']=="admin") {
                $_SESSION['id_admin'] = $row['id'];
                $_SESSION['role'] = "admin";
                  header("location:admin.html");
            } else if ($row['role']=="user") {
                $_SESSION['id_user'] = $row['id'];
                $_SESSION['role'] = "user";
                  header("location:user.html");
            }
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | TechSite</title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
<!-- Login Page -->
      <h1>Login</h1>
      <div class="ktt">
      <form method="POST">
        <label>username</label>
        <input type="text" name="username"  id="username" placeholder="username" required/>
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="password" required />
        <input class="akk" type="submit" name="login" id="login" value="Login" />
      </form>
    <!-- Pilihan Menuju Daftar Site -->
    </div>
    <p class="para-2">
      Belum  mempunyai akun? <a href="register.php">Daftar Disini</a>
    </p>
  </body>
</html>