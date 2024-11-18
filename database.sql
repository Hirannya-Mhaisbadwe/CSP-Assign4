CREATE DATABASE hotel_booking;

USE hotel_booking;

CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50),
    price DECIMAL(10, 2),
    image VARCHAR(100),
    availability BOOLEAN
);

INSERT INTO rooms (type, price, image, availability) VALUES
('AC Room', 100.00, 'room_ac.jpg', 1),
('Non-AC Room', 80.00, 'room_nonac.jpg', 1),
('Suite', 200.00, 'suite.jpg', 1);


CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT,
    rating INT
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id VARCHAR(50),
    email VARCHAR(100),
    cancellation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
