<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='space_reservation';

    $con=mysqli_connect($host,$user,$password,$db);

    if($con)
    {
       // echo"Connection Ok";
    }
    else
    {
        echo"Connection Error";
    }


?>