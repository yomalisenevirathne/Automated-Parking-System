<?php
require 'config.php';

$Id = $_POST["uid"];
$ReservationId = $_POST["ureservationId"];
$Name = $_POST["uname"];
$Email = $_POST["uemail"];
$Phone = $_POST["uphone"];
$VehicleType = $_POST["uvehicleType"];
$Date = $_POST["udate"];
$Time = $_POST["utime"];
$Duration = $_POST["uduration"];

if(empty($ReservationId)||empty($Name)||empty($Email)||empty($Phone)||empty($VehicleType)||empty($Date)||empty($Time)||empty($Duration))
{
    echo "All required";
}
else
{
    $sql = "UPDATE reservation set reservationId='$ReservationId' ,name='$Name' ,email='$Email' ,phone='$Phone' ,vehicleType='$VehicleType' ,date='$Date' ,time='$Time' ,duration='$Duration' WHERE id='$Id'";

    if($con->query($sql))
    {
        //echo "Data Updated!";
        //header("Location:read.php");
        echo "<script>alert('Update Successful!');</script>";
        echo "<script>window.location.href = 'reservationTable.php';</script>";
    }
    else
    {
        echo "Data Not Updated!";
    }
}

?>