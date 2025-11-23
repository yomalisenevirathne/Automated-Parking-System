<?php
    require 'config.php';

    $studentName = $_POST["sname"];
    $studentEmail = $_POST["semail"];
    $studentComplain = $_POST["scomplain"];

    $sql = "INSERT INTO complain (name, email, complain) 
            VALUES ('$studentName', '$studentEmail', '$studentComplain')";

    if($con->query($sql))
    {
        //echo "Insert Successful from read page";
        header("Location:complain.php");
    }
    else{
        echo "Error".$con->error;
    }

    $con->close();

?>