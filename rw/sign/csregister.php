<?php

    include 'connection.php';  // Include the database connection file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize input values
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Check if email already exists
        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $checkEmailQuery);

        if (mysqli_num_rows($result) > 0) {
            // If email exists, show error
            echo "Email already registered.";
        } else {
            // Hash the password before storing it
            

            // Insert new user into the database
            $sql = "INSERT INTO users (firstname, email, password) VALUES ('$firstname', '$email', '$password')";
            
            if (mysqli_query($con, $sql)) {

                //echo "Registration successful! You can now login.";
                header("Location:cssignup.php");


            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    }
?>