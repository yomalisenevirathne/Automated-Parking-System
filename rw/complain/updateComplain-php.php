<?php
require 'config.php';

$ID = $_POST["uid"];
$Name = $_POST["uname"];
$Email = $_POST["uemail"];
$Complain = $_POST["ucomplain"];

if(empty($Name)||empty($Email)||empty($Complain))
{
    echo "All required";
}
else
{
    $sql = "UPDATE complain set name='$Name' ,email='$Email' ,complain='$Complain' WHERE id='$ID'";

    if($con->query($sql))
    {
        //echo "Data Updated!";
        //header("Location:read.php");
        echo "<script>alert('Update Successful!');</script>";
        echo "<script>window.location.href = 'complain.php';</script>";
    }
    else
    {
        echo "Data Not Updated!";
    }
}

?>