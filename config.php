<?php
$servername = "localhost";
$username = "root";
$password = "root"; // MAMP default
$dbname = "user_auth_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
