<?php
$host = "ec2-34-192-246-6.compute-1.amazonaws.com";
$database = "d4rp9f2acpmucp";
$user = "mncuhzmbyxppeg";
$port = "5432";
$password = "f09da77418af3b555fbebb9fb1a74a568bdd6421c4f70f955d9a6f285c31a838";

$dsn = "pgsql:host=$host;
              dbname=$database;
              user=$user;
              port=$port;  
              password=$password";

try{
  $conn = new PDO($dsn);
  
  if ($conn){
    echo "Connected to the <strong>$db</strong> database successfully!";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>
