<?php
$servername = "129.151.227.25";
$username = "raturcu";
$password = "Mangalia123!";
$dbname = "admins";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
