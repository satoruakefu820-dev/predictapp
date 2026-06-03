<?php

$conn = new mysqli(
    "metro.proxy.rlwy.net",
    "root",
    "EGRGopdYXDOptbuKYrEzTaRPbvktHFnH",
    "railway",
    33198
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
