<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $email = $_POST['email'];

    $query = "INSERT INTO bookings (booking_id, email) VALUES ('$booking_id', '$email')";
    if ($conn->query($query)) {
        echo "<p>Your booking has been successfully canceled! <a href='../index.php'>Go back to home</a>.</p>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

