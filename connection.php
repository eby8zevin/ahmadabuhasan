<?php

$host = "ec2-52-71-55-81.compute-1.amazonaws.com";
$dbname = "d93pbkhncnv410";
$user = "vywyrnwjqzadfe";
$port = "5432";
$password = "d1ec31b2868f9070413367ba19c26f79b439365709fb6a90f6e5fb227cc8830a";

try{
    //Set DSN Data Source Name
    $dsn = "pgsql:host" . $host . ";
                  port=" . $port . ";
                  dbname=" . $dbname . ";
                  user=" . $user . ";
                  password=" . $password . ";";
    
    // Create a PDO Instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo 'Connection Failed: ' . $e->getMessage();
}

?>
