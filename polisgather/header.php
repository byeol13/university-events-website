<?php
session_start();

$is_logged_in = isset($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<header>
      <div class="navbar">
        <div class="logo-area">
          <img class="polis-gather-logo" src="logo/polisgather233 1.png">
          <?php if (isset($header_text) && $header_text !== ''): ?>
            <p class="header-text"><?php echo $header_text; ?></p>
          <?php endif; ?>
        </div>
          <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="all-events.php">All Events</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="#footer">Contact Us</a></li>

            <?php if ($is_logged_in): ?>
                <a href="logout.php"> <button class="btn">Log Out</button> </a>
            <?php else: ?>
                <a href="register.php"> <button class="btn">Sign Up</button> </a>
            <?php endif; ?>

          </ul>
        <div class="toggle_btn">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>

      <div class="dropdown_menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="all-events.php">All Events</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="#footer">Contact Us</a></li>
          
          <li>
            <?php if ($is_logged_in): ?>
                  <a href="logout.php"> <button class="btn">Log Out</button> </a>
              <?php else: ?>
                  <a href="register.php"> <button class="btn">Sign Up</button> </a>
            <?php endif; ?>
          </li>

      </div>
    </header>
</body>
</html>