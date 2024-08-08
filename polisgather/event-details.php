<?php

$header_text = "About the Event";
include('header.php');

include_once 'db_connection.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/event-details.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
  </head>
  <body>
    <main class="main-content">
      <div class="lines">
        <div class="all-events-tab">
          <div class="all-events-line-1">
            <p class="all-events-text">All Events</p>
          </div>
          <div class="line-2"></div>
        </div>
        <div class="line-3"></div>
      </div>
  
      <div class="event-detailed-info" id="eventDetailedInfo">

      <?php

// get event id from url
$eventId = isset($_GET["id"]) ? $_GET["id"] : null;

if ($eventId === null) {
    echo "Event ID not provided";
    exit; 
}

// id valiation
if (!is_numeric($eventId)) {
    echo "Invalid event ID";
    exit; 
}

$sql = "SELECT events.title, events.date, events.time, events.imageUrl, event_details.description, event_details.location 
        FROM events 
        INNER JOIN event_details ON events.id = event_details.event_id 
        WHERE events.id = $eventId";
$result = $conn->query($sql);


if ($result === false) {
    echo "Database query error";
    exit; 
}

if ($result->num_rows > 0) {
    // output event details
    $row = $result->fetch_assoc();
    ?>

    <div class="text-information">
        <p class="event-title"><?php echo $row['title']; ?></p>
        <p class="event-description"><?php echo $row['description']; ?></p>
    </div>
    <div class="further-details">
        <div class="details-name">
            <div class="event-detail">
                <p class="event-detail-text">Date</p>
            </div>
            <p class="current-value"><?php echo $row['date']; ?></p>
        </div>
        <div class="details-name">
            <div class="event-detail">
                <p class="event-detail-text">Time</p>
            </div>
            <p class="current-value"><?php echo $row['time']; ?></p>
        </div>
        <div class="details-name">
            <div class="event-detail">
                <p class="event-detail-text">Location</p>
            </div>
            <p class="current-value"><?php echo $row['location']; ?></p>
        </div>
        <div class="details-name">
            <div class="event-detail">
                <p class="event-detail-text">Share</p>
            </div>
            <div class="current-value">
              <i class="iconify" data-icon="pajamas:twitter" onclick="shareOnTwitter('<?php echo addslashes(htmlspecialchars($row['title'])); ?>')"></i>
              <i class="iconify" id="facebook-share" data-icon="fe:facebook" onclick="shareOnFacebook('<?php echo addslashes(htmlspecialchars($row['title'])); ?>')"></i>
              <i class="iconify" data-icon="fa-brands:linkedin" onclick="shareOnLinkedin('<?php echo addslashes(htmlspecialchars($row['title'])); ?>')"></i>
            </div>
        </div>
        <div class="details-name">
            <div class="event-detail">
                <p class="event-detail-text">Secure Your Spot</p>
            </div>
            <button class="join-us-button" id="joinBtn" onclick="openForm()">Join Us</button>
        </div>
        <div id="popupForm" class="popup">
          <form id="payment-form">
            <p class="form-title">Reserve Now</p>
            <hr>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="example@domain.com" required>
            <label for="phoneNo">Phone Number</label>
            <input type="tel" id="tel" name="tel" placeholder="+1234567890" required>

            <div id="card-element">
              <!-- Stripe Element will be inserted here. -->
            </div>

            <div id="card-errors" role="alert"></div>

            <button id="submit-button" type="submit">Submit Payment</button>
          </form>
        </div>
      </div>
        <!-- <div id="popupForm" class="popup">
            <form class="popup-content" id="joinForm" action="reservations.php" method="POST">
                <p class="form-title">Reserve Now</p>
                <hr>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" autocomplete="off" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="example@domain.com" autocomplete="off" required>
                <label for="phoneNo">Phone Number</label>
                <input type="tel" id="tel" name="tel" placeholder="+1234567890" autocomplete="off" required>

                <input type="hidden" id="event" name="event" value="<?php echo $row['title']; ?>" readonly required>

                <input type="hidden" name="eventId" value="<?php echo $eventId; ?>">

                <div class="form-buttons">
                  <button class="btn-submit" type="submit">Submit</button>
                  <button class="btn-cancel" type="button" onclick="closeForm()">Close</button>
                </div>
            </form>
        </div> -->
    </div>
    <?php
} else {
    echo "Event details not found";
}
?> 
      </div>
      
      <div class="event-images" id="eventImages">
        
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
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var stripe = Stripe('your-publishable-key-here'); // Use your own publishable key
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
          event.preventDefault();

          stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;
            } else {
              stripeTokenHandler(result.token);
            }
          });
        });

        function stripeTokenHandler(token) {
          var form = document.getElementById('payment-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('value', token.id);
          form.appendChild(hiddenInput);

          form.submit();
        }
      });
    </script>

    <script src="scripts/event-details.js"></script>
    <script src="scripts/dropdown-menu.js"></script>
    <script src="scripts/navbar-highlight.js"></script>
  </body>
</html>