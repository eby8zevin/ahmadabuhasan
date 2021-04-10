<?php
$db = parse_url(getenv("postgres://vywyrnwjqzadfe:d1ec31b2868f9070413367ba19c26f79b439365709fb6a90f6e5fb227cc8830a@ec2-52-71-55-81.compute-1.amazonaws.com:5432/d93pbkhncnv410"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=ec2-52-71-55-81.compute-1.amazonaws.com;
     port=5432;user=vywyrnwjqzadfe;
     password=d1ec31b2868f9070413367ba19c26f79b439365709fb6a90f6e5fb227cc8830a;
     dbname=d93pbkhncnv410",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

// Check connection
if(!$pdo) { 
    echo 'There has been an error connecting';
} else {
    echo 'Connected successfully';
}

?>
