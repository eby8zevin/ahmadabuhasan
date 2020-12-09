<?php

$db_hostname = "2a02:4780:bad:c0de::14:37962";
$db_username = "id15358400_root";
$db_password = "000WebHost-root";
$db_name = "id15358400_uas";

// Create connection
$conn = mysqli_connect($dbhostname, $db_username, $db_password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
