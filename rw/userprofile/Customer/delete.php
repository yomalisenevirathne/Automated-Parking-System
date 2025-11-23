<?php
    include 'connection.php';

    $user_id=$_GET['user_id'];

    $query="DELETE FROM users WHERE user_id='$user_id'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:../../index.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>