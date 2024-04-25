<?php
// process_reservation.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "table_reservation_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reservations (name, email, phone, reservation_date, reservation_time, party_size, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssii", $name, $email, $phone, $date, $time, $party_size, $special_requests);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$party_size = $_POST['party_size'];
$special_requests = $_POST['special_requests'];

$stmt->execute();

echo "Reservation successful.";

$stmt->close();
$conn->close();
?>
