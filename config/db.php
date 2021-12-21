<?php
$host = "ec2-34-192-246-6.compute-1.amazonaws.com";
$dbname = "d4rp9f2acpmucp";
$user = "mncuhzmbyxppeg";
$password = "f09da77418af3b555fbebb9fb1a74a568bdd6421c4f70f955d9a6f285c31a838";
$port = "5432";

$con = pg_connect("host=$host dbname=$dbname user=$user password=$password port=$port sslmode=require");

if (!$con)
{
  echo "Database connection failed.";
}else{
  echo "Database connection success.";
}
?>
