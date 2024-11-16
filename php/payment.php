<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Payment Portal</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="rooms.php">Rooms</a>
        <a href="feedback.php">Feedback</a>
        <a href="cancellation.php">Cancel Booking</a>
        <a href="food.php">Food Services</a>
    </nav>
    <div class="container">
        <h2>Complete Your Payment</h2>
        <form action="process_payment.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="card">Card Number:</label>
            <input type="text" id="card" name="card" required>

            <label for="expiry">Expiry Date:</label>
            <input type="month" id="expiry" name="expiry" required>

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv" required>

            <input type="submit" value="Pay Now" class="button">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>

