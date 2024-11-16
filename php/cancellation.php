<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Booking</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Cancel Your Booking</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="rooms.php">Rooms</a>
        <a href="feedback.php">Feedback</a>
        <a href="cancellation.php">Cancel Booking</a>
        <a href="food.php">Food Services</a>
    </nav>
    <div class="container">
        <form action="process_cancellation.php" method="POST">
            <label for="booking_id">Booking ID:</label>
            <input type="text" id="booking_id" name="booking_id" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Cancel Booking" class="button">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>


