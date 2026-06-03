<?php

include "db_connect.php";

$id = $_POST["id"];

$conn->query("DELETE FROM diagnostics WHERE patient_id = '$id'");
$conn->query("DELETE FROM doctors_queue WHERE patient_id = '$id'");
$conn->query("DELETE FROM patients WHERE id = '$id'");

echo "deleted";

$conn->close();

?>