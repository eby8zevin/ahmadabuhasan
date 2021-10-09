<?php
$host = "ec2-52-71-55-81.compute-1.amazonaws.com";
$dbname = "d93pbkhncnv410";
$user = "vywyrnwjqzadfe";
$password = "d1ec31b2868f9070413367ba19c26f79b439365709fb6a90f6e5fb227cc8830a";
$port = "5432";

$con = pg_connect("host=$host dbname=$dbname user=$user password=$password port=$port sslmode=require");

if (!$con)
{
  echo "Database connection failed.";
}else{
  echo "Database connection success.";
}
?>
