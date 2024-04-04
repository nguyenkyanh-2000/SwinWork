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

  <link rel="stylesheet" href="./styles/style.css" />

  <title>SwinWork | Login</title>

<body class="layout login">
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