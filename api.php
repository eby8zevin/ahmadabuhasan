<?php

include "connection.php";
	
$query = mysqli_query("SELECT * FROM tugas_data");
	
$json = array();
	
while($row = mysqli_fetch_assoc($query)){
	$json[] = $row;
}
	
echo json_encode($json);
	
mysqli_close($connect);
	
?>
