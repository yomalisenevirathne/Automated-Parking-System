
<?php
    include 'connection.php';

    $id=$_GET['id'];

    $query="DELETE FROM payment WHERE id='$id'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:payment-display.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>