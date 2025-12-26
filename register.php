<?php
$servername = "localhost";
$username = "louisducourneau_user-db-social";
$password = "haMyuHr8Oa";
$dbname = "louisducourneau_mini-social";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
