<?php
$servername = "localhost";
$username = "id15358400_root";
$password = "000WebHost-root";
$dbname = "id15358400_uas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
