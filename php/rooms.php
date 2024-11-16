<?php
include 'db.php';

$query = "SELECT * FROM rooms";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Rooms</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Available Rooms</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="rooms.php">Rooms</a>
        <a href="feedback.php">Feedback</a>
        <a href="cancellation.php">Cancel Booking</a>
        <a href="food.php">Food Services</a>
    </nav>
    <div class="container">
        <ul>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <li>
                    <img src="../images/<?php echo $row['image']; ?>" alt="Room Image" class="room-image">
                    <h3><?php echo $row['type']; ?></h3>
                    <p>Price: $<?php echo $row['price']; ?></p>
                    <p>Available: <?php echo $row['availability'] ? 'Yes' : 'No'; ?></p>
                    <button class="button" onclick="location.href='payment.php'">Book Now</button>
                </li>
            <?php } ?>
        </ul>
    </div>
    <footer>
        <p>&copy; 2024 Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>

