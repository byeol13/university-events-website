<?php
include_once 'db_connection.php';

$name = $email = $tel = $eventId = $eventTitle = '';
$successMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $eventId = $_POST['eventId'];
    $eventTitle = $_POST['event'];

    $sql = "INSERT INTO reservations (name, email, tel, event_id, event) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $tel, $eventId, $eventTitle);

    if ($stmt->execute()) {
        $successMessage = "Reservation submitted successfully.";
    } else {
        $successMessage = "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>

    <link rel="icon" href="logo/polisgather233 2.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/reservation.css">
</head>
<body>

<?php if (!empty($successMessage)): ?>
        <div class="success-container">
          <div class="success-message">
              <?php echo $successMessage; ?>
          </div>
          <button class="btn-navigate" onclick="navigateToHome()">OK</button>
        </div>
        <script>
            document.querySelector('.success-message').style.display = 'block';
            function navigateToHome() {
                window.location.href = 'all-events.php'; 
            }
        </script>
    <?php endif; ?>
</body>
</html>

