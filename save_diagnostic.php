<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

$patient_id = $_POST["patient_id"];
$fullname = $_POST["fullname"];
$temperature = $_POST["temperature"];
$pressure = $_POST["pressure"];
$sugar = $_POST["sugar"];
$diagnosis = $_POST["diagnosis"];

$sql = "INSERT INTO diagnostics
(patient_id, fullname, temperature, pressure, sugar, diagnosis)
VALUES
('$patient_id','$fullname','$temperature','$pressure','$sugar','$diagnosis')";

if($conn->query($sql)){
    echo "success";
}else{
    echo $conn->error;
}

$conn->close();

?>