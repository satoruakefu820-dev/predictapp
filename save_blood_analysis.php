<?php

include "db_connect.php";

$patient_id = $_POST["patient_id"];
$fullname = $_POST["fullname"];

$rbc = $_POST["rbc"];
$hgb = $_POST["hgb"];
$hct = $_POST["hct"];
$mchc = $_POST["mchc"];
$wbc = $_POST["wbc"];
$neu = $_POST["neu"];
$lym = $_POST["lym"];
$mono = $_POST["mono"];
$eos = $_POST["eos"];
$bas = $_POST["bas"];
$plt = $_POST["plt"];

$result = $_POST["result"];

$sql = "INSERT INTO blood_analysis
(
patient_id,
fullname,
rbc,
hgb,
hct,
mchc,
wbc,
neu,
lym,
mono,
eos,
bas,
plt,
result
)
VALUES
(
'$patient_id',
'$fullname',
'$rbc',
'$hgb',
'$hct',
'$mchc',
'$wbc',
'$neu',
'$lym',
'$mono',
'$eos',
'$bas',
'$plt',
'$result'
)";

if($conn->query($sql)){
    echo "Анализ крови сохранён";
}else{
    echo $conn->error;
}

$conn->close();

?>