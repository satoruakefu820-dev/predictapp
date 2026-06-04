<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

$result = $conn->query("SHOW TABLES");

if(!$result){
    die($conn->error);
}

while($row = $result->fetch_array()){
    echo $row[0] . "<br>";
}

echo "END";
?>
