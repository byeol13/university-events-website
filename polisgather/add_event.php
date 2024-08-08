<?php

session_start();
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve data from form
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $imageUrl = $_POST['imageUrl'];
    $description = $_POST['description'];
    $location = $_POST['location'];

    $sql1 = "INSERT INTO events (title, date, time, imageUrl) VALUES (?, ?, ?, ?)";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ssss", $title, $date, $time, $imageUrl);
    $stmt1->execute();

    // get the id of the inserted event
    $eventId = $conn->insert_id;

    $sql2 = "INSERT INTO event_details (event_id, description, location) VALUES (?, ?, ?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("iss", $eventId, $description, $location);
    $stmt2->execute();

    $stmt1->close();
    $stmt2->close();

    header("location: adminpage.php");
}
?>
