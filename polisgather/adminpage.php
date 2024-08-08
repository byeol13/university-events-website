<?php
include('functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

function getReservationCount($eventId) {
    include 'db_connection.php';

    $sql = "SELECT COUNT(*) AS count FROM reservations WHERE event_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'];
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM events WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT id, title, date, time, imageUrl FROM events";
$result = $db->query($sql);

$sql1 = "SELECT name, email, tel, event, submission_date FROM reservations";
$result1 = $db->query($sql1);

?> 

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/adminpage.css">
</head>
<body>

    <header>
        <div class="nav">
            <div class="logo-area">
                <img class="polis-gather-logo" src="logo/polisgather233 1.png">
            </div>

            <div class="right-links">

                <a href="logout.php"> <button class="logout-btn">Log Out</button> </a>
            </div>
        </div>
    </header>

    <main>
    <div class="event-list">
        <p class="list-title">Event List</p>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Image</th>
                    <th>Reservations</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><img class="event-img" src="<?php echo $row['imageUrl']; ?>"></td>
                            <td id="reservations"><?php echo getReservationCount($row['id']); ?></td>
                            <td>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="submit" name="delete" value="Delete" class="delete-button">
                            </form>
                        </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No events found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


    <div class="event-form">
        <button id="showAddEventForm" class="btn new-event-btn">New Event</button>

        <div class="add-form" id="newEventForm">
            <p class="add-event-text">Add Event</p>
            <form action="add_event.php" method="post">
                <input type="hidden" id="eventId" name="eventId">
                <div class="form-row">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
                    </div>
                    <div class="form-group full-width">
                        <label for="imageUrl">Image URL:</label>
                        <input type="text" id="imageUrl" name="imageUrl" required>
                    </div>
                </div>
                <input type="submit" value="Add Event" class="add-btn">
            </form>
        </div>
    </div>

    <div class="reservation-table">
        <button id="showReservationsBtn" class="btn reservation-btn">Reservations</button>

        <div id="reservationsTableContainer" style="display: none;">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Event</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result1->num_rows > 0): ?>
                        <?php while($row = $result1->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['tel']; ?></td>
                                <td><?php echo $row['event']; ?></td>
                                <td><?php echo $row['submission_date']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No reservations found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    </main>
    <script src="scripts/adminpage.js"></script>

</body>
</html>
