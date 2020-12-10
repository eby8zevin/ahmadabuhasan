<?php
$conn = "pgsql:"
    . "host=ec2-52-71-55-81.compute-1.amazonaws.com;"
    . "dbname=d93pbkhncnv410;"
    . "user=vywyrnwjqzadfe;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=d1ec31b2868f9070413367ba19c26f79b439365709fb6a90f6e5fb227cc8830a";

$db = new PDO($conn);
?>
