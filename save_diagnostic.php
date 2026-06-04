<?php

include "db_connect.php";

if (
    isset($_POST["patient_id"]) &&
    isset($_POST["fullname"]) &&
    isset($_POST["temperature"]) &&
    isset($_POST["pressure"]) &&
    isset($_POST["sugar"]) &&
    isset($_POST["diagnosis"])
) {

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

    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo $conn->error;
    }

} else {

    echo "Waiting for data...";

}

$conn->close();

?>
