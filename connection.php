<?php

$db_hostname = "";
$db_username = "id15358400_root";
$db_password = "000WebHost-root";
$db_name = "id15358400_uas";

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_nameee);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
