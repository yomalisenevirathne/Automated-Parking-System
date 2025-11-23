<?php

    include("connection.php");
    

    //session_start();


    //$applicant_id = $_SESSION['applicant_id'];
    //$job_id=$_SESSION['job_id'];
       

    if(isset($_POST['submit']))
    {
            
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $state=$_POST['district'];
            $cardnumber=$_POST['cardnumber'];
            $expmonth=$_POST['expmonth'];
            $expyear=$_POST['expyear'];
            $cvv=$_POST['cvv'];





            $query_application = "INSERT INTO payment (username,email,address,city,state,card_number,expire_date,exp_month,cvv)
            VALUES ('$name', '$email', '$address', '$city','$state', '$cardnumber','$expyear','$expmonth','$cvv')";

            $result_application = mysqli_query($con, $query_application);
        
            
        
            if ($result_application) {

                echo("Data saved");

                header("Location:payment-display.php");
                
            } else {
                echo "Error";
            }
        


            
    }
?>