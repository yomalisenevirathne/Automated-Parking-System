<?php
    include 'connection.php';

    session_start();

    $user_id=$_SESSION['user_id'];

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone_num = $_POST['mobile'];
        $email = $_POST["email"];
        $dob = $_POST["date"];
        $password = $_POST["password"];
        $nic = $_POST["nic"];
        $company_name = $_POST['company_name'];

      
        $query = "UPDATE users
                SET firstname = '$firstname', 
                    lastname = '$lastname',
                    phone_num = '$phone_num', 
                    email = '$email', 
                    password = '$password',
                    dob = '$dob',
                    nic = '$nic',
                    company_name = '$company_name'
                    WHERE user_id = '$user_id';";

        
        $result = mysqli_query($con, $query);

        if ($result) {
           
            header("Location: editprofile.php");
            exit(); 
        } else {
            
            echo "Error updating interview: " . mysqli_error($con);
        }
    }
?>
