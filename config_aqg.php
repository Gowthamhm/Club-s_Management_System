<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db = "aqg";
// Create connection
$connaqg = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  // echo "connected sucussfully";
}
?>
