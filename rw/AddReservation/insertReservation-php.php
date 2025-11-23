<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

$userReservationId = $_POST["sreservationId"];
$userName = $_POST["sname"];
$userEmail = $_POST["semail"];
$userPhone = $_POST["sphone"];
$userVehicleType = $_POST["svehicletype"];
$userDate = $_POST["sdate"];
$userTime = $_POST["stime"];
$userDuration = $_POST["sduration"];


$sql = "INSERT INTO reservation (reservationId, name, email, phone, vehicleType, date, time, duration)
        VALUES ('$userReservationId', '$userName', '$userEmail', '$userPhone', '$userVehicleType', '$userDate', '$userTime', '$userDuration')";

if($con->query($sql))
{
    //echo "Insert Successful from read page";
    header("Location: reservationTable.php");
    echo "Insert Successful";
    console.log("Insert Successful");
}
else{
    echo "Error".$con->error;
    echo "Insert Unsuccessful";
    console.log("Insert Unsuccessful");
}

$con->close();

?>