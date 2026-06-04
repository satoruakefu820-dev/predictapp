<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

$conn->query("
CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    age VARCHAR(10),
    gender VARCHAR(20),
    phone VARCHAR(30)
)");

$conn->query("
CREATE TABLE IF NOT EXISTS diagnostics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    fullname VARCHAR(100),
    temperature VARCHAR(20),
    pressure VARCHAR(20),
    sugar VARCHAR(20),
    diagnosis TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$conn->query("
CREATE TABLE IF NOT EXISTS doctors_queue (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    fullname VARCHAR(100),
    doctor VARCHAR(50),
    visit_date DATE,
    visit_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

echo "TABLES CREATED";
?>