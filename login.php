<!DOCTYPE html>
<html lang="en">
<!--Head-->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">

  <title>SwinWork | Login</title>
  <!--Body-->
  <body class="layout login">
  <?php
   include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);

      if($count == 1) {
	  
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: manage.php");
      } else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
  <form class="login-form" action="#" method="POST">
    <h1 class="login-form__title">SwinWORK</h1>

    <div class="login-form__field">
      <label for="username" class="login-form__label">Username:</label>
      <input type="text" id="username" name="username" class="input login-form__input" required />
    </div>
    <div class="login-form__field">
      <label for="password" class="login-form__label">Password:</label>
      <input type="password" id="password" name="password" class="input login-form__input" required />
    </div>

    <button type="submit" class="btn btn-secondary login-form__btn">
      Login
    </button>

    <p class="login-form__homelink">
      Back to the
      <a href="index.php"> HOMEPAGE </a>
    </p>
  </form>
</body>
</head>
</html>
<!--
(●っゝω・)っ～☆HELLO☆
-->
