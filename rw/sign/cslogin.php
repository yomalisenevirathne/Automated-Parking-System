<?php

    include 'connection.php';  // Include the database connection file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize input values
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Check if email exists in the database
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Fetch the user details
            $user = mysqli_fetch_assoc($result);

            // Compare the input password with the stored password (since hashing is removed)
            if ($password === $user['password']) {
                echo "Login successful! Welcome, " . $user['firstname'] . ".";
                
                 session_start();
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['email'] = $user['email'];
                
                     header("Location:../home.php");

            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Email not found.";
        }
    }
?>
