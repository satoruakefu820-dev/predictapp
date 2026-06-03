<?php

include "db_connect.php";

if (
    isset($_POST["fullname"]) &&
    isset($_POST["age"]) &&
    isset($_POST["gender"]) &&
    isset($_POST["phone"])
) {

    $fullname = $_POST["fullname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO patients
    (fullname, age, gender, phone)
    VALUES
    ('$fullname', '$age', '$gender', '$phone')";

    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo "error";
    }

} else {

    echo "Waiting for data...";

}

$conn->close();

?>
