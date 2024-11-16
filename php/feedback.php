<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Feedback and Reviews</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="rooms.php">Rooms</a>
        <a href="feedback.php">Feedback</a>
        <a href="cancellation.php">Cancel Booking</a>
        <a href="food.php">Food Services</a>
    </nav>
    <div class="container">
        <h2>We value your feedback</h2>
        <form action="process_feedback.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="5" required></textarea>

            <label for="rating">Rate us:</label>
            <select id="rating" name="rating">
                <option value="5">Excellent</option>
                <option value="4">Very Good</option>
                <option value="3">Good</option>
                <option value="2">Fair</option>
                <option value="1">Poor</option>
            </select>

            <input type="submit" value="Submit Feedback" class="button">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>


