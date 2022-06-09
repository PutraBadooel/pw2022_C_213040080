<?php 
    require 'functions.php';

    if(isset($_POST["register"]) ) {

        if(register($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                    document.location.href = 'login.php';
                    </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up | TechSite</title>
    <link rel="stylesheet" href=".register.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- SignUp Page -->
    <div class="signup-box">
      <h1>Sign Up</h1>
    </div>
      <div class="box">
      <form method="POST">
        <label>username</label>
        <input type="text" name="username" id="username" placeholder="Username" required/>
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required />
        <label>Confirm Password</label>
        <input type="password" name="password2" id="password2" placeholder="Confirm Password" required />
        <div class="submit-button">
        <input type="submit" name="register" id="register" value="Register" />
        </div>
      </form>
      <!-- Pilihan Beranda dan Masuk -->
    </div>
      <p>
     <br />        
        <a href="index.html"><-BERANDA</a> and <a href="login.php">MASUK->        
      </p>
    
  </body>
</html>

