<?php
    include("connection.php");

    // Fetch payment data from the database
    $query_display = "SELECT * FROM payment";
    $result_display = mysqli_query($con, $query_display);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Data</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #3d64ab;
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center; /* Center the navigation links */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }

        .navbar a:hover {
            background-color: #8ca9e1;
        }

        .navbar .right {
            position: absolute;
            right: 10px; /* Move Sign Out to the far right */
            top: 10px;
            display: flex;
            align-items: center;
        }

        .navbar .profile-icon {
            width: 30px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .navbar .sign-out {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            background-color: #d9534f;
            border-radius: 4px;
        }

        .navbar .sign-out:hover {
            background-color: #c9302c;
        }

        .footer {
            background-color: #3d64ab;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-top: 80px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            font-family: 'Arial', sans-serif;
            margin: 20px auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        table td {
            font-size: 16px;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Style for action links */
        table a {
            text-decoration: none;
            color: #2196F3;
            font-weight: bold;
        }

        table a:hover {
            text-decoration: underline;
        }

        /* Add subtle transition to hover effect */
        table td, table th {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>

</head>
<body>

<!-- Navigation bar (header section) -->
<div class="navbar">
    <a href="../home.php">Home</a>
    <a href="../AddReservation/addReservation.php">Add Reservation</a>
    <a href="../complain/complain.php">Complaints</a>
    <a href="../payment/payment.php">Add Payment</a>
    

    <!-- Right aligned buttons -->
    <div class="right">
        <a href="profile.php">
            <img src="../profile-user.png" alt="Profile Icon" class="profile-icon">
        </a>
        <a href="./userprofile/Customer/dashbaord.php" class="sign-out">Sign Out</a>
    </div>
</div>

<h2>Payment Details</h2>

<!-- Table for displaying the data -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Card Number</th>
        <th>Expire Month</th>
        <th>Expire Year</th>
        <th>CVV</th>
        <th>Actions</th>
    </tr>

    <?php
        // Display the data in the table
        while($row = mysqli_fetch_assoc($result_display)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['state']."</td>";
            echo "<td>".$row['card_number']."</td>";
            echo "<td>".$row['exp_month']."</td>";
            echo "<td>".$row['expire_date']."</td>";
            echo "<td>".$row['cvv']."</td>";
            echo "<td>
                    <a href='update_payment.php?id=".$row['id']."'>Update</a> |
                    <a href='payment_delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
    ?>

</table>

<!-- Footer section -->
<div class="footer">
    This is the student management system 2024
</div>

</body>
</html>
