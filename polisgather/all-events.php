<?php

$header_text = "Events at Polis";
include('header.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Polis Gather | All Events</title>

    <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/all-events.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
  </head>
  <body>
    <main class="main-content">
      <div class="all-events-tab">
        <div class="all-events-line-1">
          <p class="all-events-text">All Events</p>
        </div>
        <div class="line-2">
        </div>
      </div>
      <div class="filter-area">
        <form class="date-filter" id="filter-form">
          <div class="date-area">
            <label for="start-date">Start Date</label>
            <input type="date" class="date-input" id="start-date">

            <span class="separator">|</span>

            <label for="end-date">End Date</label>
            <input type="date" class="date-input" id="end-date">
          </div>
          <div class="search-area">
            <input class="keyword-input" id="keyword" type="text" placeholder="Keyword">
            <button type="submit" class="search-btn">Search</button>
          </div>
        </form>
      </div>
  
      <div class="all-events-grid">
      </div>

      <div class="pagination">
        <button id="prev-page"><i class="fa-solid fa-chevron-left"></i></button>
        <span id="current-page">1</span>
        <button id="next-page"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
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

    <script src="scripts/all-events.js"></script>
    <script src="scripts/dropdown-menu.js"></script>
    <script src="scripts/navbar-highlight.js"></script>
  </body>
</html>