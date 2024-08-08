<?php 

$header_text = "";
include('header.php'); 

include('db_connection.php');

$sql = "SELECT id, title, date, imageUrl FROM events ORDER BY date DESC LIMIT 3";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">

    <title>Polis Gather</title>
    <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
  </head>
  <body>
    <main class="main-content">
      <div class="text-image-area">
        <div class="text-image-content">
            <p class="caption">Explore opportunities to engage with<br> 
               people, ideas and education!</p>
            <button class="see-all-events-btn" onclick="seeAllEventsBtn()">See all  Events</button>
        </div>
        <div class="text-image-img">
          <img class="gather-people-img" src="general_images/isometric view of colleagues having meeting.png">
        </div>
      </div>


      <div class="featured-events-area">
        <p class="featured-events-text">Latest Events</p>
        <div class="featured-events-grid" id="featuredEventsContainer">
          <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                  <a href="event-details.php?id=<?php echo $row['id']; ?>" class="featured-event-link">
                    <div class="featured-event-preview">
                        <div class="featured-event-image">
                            <img class="fe-img" src="<?php echo $row['imageUrl']; ?>" alt="Event Image">
                        </div>
                        <div class="featured-event-info">
                            <p class="fe-title"><?php echo $row['title']; ?></p>
                            <p class="fe-date"><?php echo date('d F Y', strtotime($row['date'])); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif; ?>
        </div>
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

    <script src="scripts/home.js"></script>
    <script src="scripts/dropdown-menu.js"></script>
    <script src="scripts/navbar-highlight.js"></script>
  </body>
</html>