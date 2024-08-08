<?php

session_start();

include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $title = htmlspecialchars($_POST['title']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $imageUrl = htmlspecialchars($_POST['imageUrl']);

    // Insert event into database
    $stmt = $conn->prepare("INSERT INTO events (title, date, time, imageUrl) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $date, $time, $imageUrl);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        // Event added successfully
        echo "Event added successfully!";
    } else {
        // Error occurred
        echo "Error adding event: " . $stmt->error;
    }

    // Redirect back to admin page after adding event
    header("Location: adminpage.php");
    exit();
}

// Retrieve events from the database sorted by date
$stmt = $conn->prepare("SELECT * FROM events ORDER BY date");
$stmt->execute();
$result = $stmt->get_result();
$events = $result->fetch_all(MYSQLI_ASSOC);

?>
