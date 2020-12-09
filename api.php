<?php

include "connection.php";
	
$query = mysqli_query($conn, "SELECT * FROM tugas_data");
	
$json = array();
	
while($row = mysqli_fetch_array($query)){
	$json[] = $row;
}
	
echo json_encode($json);
	
mysqli_close($conn);
	
?>
