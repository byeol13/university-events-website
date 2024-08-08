<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/register.css">

</head>
<body>
    <div class="login-form" id="loginForm">
        <div class="login-content">
          <div class="signup-option">
            <div>
              <a href="home.php"><button class="homeBtn2"><i class="fa-solid fa-angle-left back-icon2"></i>Home</button></a>
            </div>
            <div class="links">
                <p class="little-caption">New here?</p> <a href="register.php"><button class="btn">Sign Up</button></a>
            </div>
          </div>
          <form id="form-content" action="login.php", method="POST">

          <?php if (count($errors) > 0): ?>
            <div class="errors">
              <?php foreach ($errors as $error): ?>
                <?php echo $error ?></p>
              <?php endforeach ?>
            </div>
          <?php endif ?>

            <p class="signUpTitle">Login</p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" autocomplete="off" required>
            <label for="password">Passowrd</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>

            <button name="login_btn" class="btn-login" type="submit">Login</button>
          </form>
        </div>
    </div>
</body>
</html>