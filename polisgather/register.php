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
  <div id="signUpForm" class="signUp">
    <div class="signUp-content">
      <div class="left-content">
        <div>
          <a href="home.php"><button class="homeBtn1"><i class="fa-solid fa-angle-left back-icon1"></i>Home</button></a>
        </div>
        <div>
        <img class="image1" src="general_images/signupimage.png">
        <p class="signUpCaption">Catch up with the latest events happening at Polis</p>
        </div>
      </div>
      <div class="right-content">
        <div class="links">
          <p class="little-caption">Already have an account?</p> <a href="login.php"><button class="btn">Login</button></a>
        </div>
        <form id="form-content" action="register.php" method="POST">
          <p class="signUpTitle">Sign Up</p>
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="<?php echo $username; ?>" placeholder="Enter your username" autocomplete="off" required>

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="example@domain.com" autocomplete="off" required>

          <label for="password_1">Password</label>
          <input type="password" id="password" name="password_1" placeholder="Enter your password" autocomplete="off" required>

          <label for="password_2">Confirm password</label>
          <input type="password" id="password" name="password_2" placeholder="Enter your password" autocomplete="off" required>
          
          <div class="consent"><input type="checkbox" id="consent-box" name="consent" required>
            <label for="consent">I consent to the collection and processing of my personal data for university communications and related purposes.</label></div>
          
          <button name="register_btn" class="btn-signUp" type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>