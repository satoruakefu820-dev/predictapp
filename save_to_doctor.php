<?php

include "db_connect.php";

$patient_id = $_POST["patient_id"];
$fullname = $_POST["fullname"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$time = $_POST["time"];

$sql = "INSERT INTO doctors_queue 
(patient_id, fullname, doctor, visit_date, visit_time)
VALUES
('$patient_id','$fullname','$doctor','$date','$time')";

if($conn->query($sql)){
    echo "success";
}else{
    echo $conn->error;
}

$conn->close();

?>