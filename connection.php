<?php

$db_hostname = "databases.000webhost.com";
$db_username = "id15358400_root";
$db_password = "000WebHost-root";
$db_name = "id15358400_uas";

// Create connection
$conn = mysqli_connect(dbhost, db_username, db_password, db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
