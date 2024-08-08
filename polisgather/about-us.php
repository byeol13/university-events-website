<?php 

$header_text = "About Us";
include('header.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/about-us.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
</head>
<body>

  <main class="main-content">
    <p>Welcome to the "Polis Gather" website, your go-to platform for all the latest updates on events and activities happening at Polis University!
    Founded with a passion for fostering engagement and enriching the university experience, our platform serves as a central source of information and excitement for students, faculty, staff and alumni.
    From academic conferences to cultural festivals and sports competitions, we strive to keep you updated on all the exciting happenings on campus.</p>

    <p class="title">Our Mission</p>
    <p class="our-mission-line">At "Polis Gather", our mission is clear, to connect, inform and inspire.</p>
    <p><span class="sub-title">Connect:</span> Bringing people together by providing a source for discovering and participating in diverse events.</p>
    <p><span class="sub-title">Inform:</span> Keeping our audience up-to-date with timely events listing and detailed description.</p>
    <p><span class="sub-title">Inspire:</span> Sparking curiosity, igniting passion and fostering pride in being part of the Polis University family.</p>

    <p class="title">Follow Us</p>
    <p>Stay connected with us on social media to stay updated on all the latest news, events and behind-the-scenes glimpses.</p>
    <ul class="social-media-links">
      <li><i class="fa-brands fa-instagram"></i></li>
      <li><i class="fa-brands fa-facebook"></i></li>
      <li><i class="fa-brands fa-x-twitter"></i></li>
    </ul> 
  </main>

  <footer class="footer" id="footer">
    <div class="footer-container">
      <div class="left-section">
        <img class="footer-logo" src="logo/polisgather233 2.png">
        <p class="copyright-text">Copyright © 2024 PolisGather. All Rights Reserved.</p>
      </div>
      <div class="links-section">
        <div class="middle-section">
          <p class="contact-us-text">Contact Us</p>
          <ul>
            <li>+355 12 3456 789</li>
            <li>+355 12 3456 789</li>
            <li>polisgather@gmail.com</li>
          </ul>
        </div>
        <div class="right-section">
          <li class="au-link"><a href="#">About Us</a></li>
          <li class="pp-link"><a href="#">Privacy Policy</a></li>
          <div class="social-media">
            <a href="#"><i class="fa-brands fa-x-twitter icon"></i></a>
            <a href="#"><i class="fa-brands fa-facebook icon"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram icon"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="scripts/dropdown-menu.js"></script>
  <script src="scripts/navbar-highlight.js"></script>
</body>
</html>