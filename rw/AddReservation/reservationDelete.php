<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $reservationId = $_GET['reservationId'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $vehicleType = $_GET['vehicleType'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $duration = $_GET['duration'];

} else {
    echo "No data to update";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete-Reservation</title>
    <link rel="stylesheet" href="./CSS/deleteReservation.css">

    <style>
        * {
        padding: 0;
        margin: 0;
        font-family: sans-serif;
        box-sizing: border-box;
        }

        .container {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        }

        .container span {
        display: block;
        }

        .text1 {
        color: white;
        font-size: 70px;
        font-weight: 700;
        letter-spacing: 8px;
        margin-bottom: 20px;
        position: relative;
        animation: text 3s 1;
        }

        @keyframes text {
        0% {
            color: black;
            margin-bottom: -40px;
        }

        30% {
            letter-spacing: 25px;
            margin-bottom: -40px;
        }

        85% {
            letter-spacing: 8px;
            margin-bottom: -40px;
        }
        }

        /* Navigation bar styling */
        .navbar {
        background-color: #3d64ab;
        padding: 10px;
        position: fixed;
        top: 0;
        width: 100%;
        text-align: left;
        }

        .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        display: inline-block;
        }

        .navbar a:hover {
        background-color: #8ca9e1;
        }

        /* Right aligned profile and sign-out section */
        .navbar .right {
          float: right;
        }

        .navbar .profile-icon {
          width: 30px;
          height: 30px;
          vertical-align: middle;
          margin-right: 10px;
        }

        /* Footer styling */
        .footer {
        background-color: #3d64ab;
        color: white;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
        .text1 {
            font-size: 50px;
            letter-spacing: 4px;
        }

        .navbar a {
            padding: 10px 15px;
            font-size: 14px;
        }

        .navbar .right {
            float: none;
            text-align: center;
        }
        }

        @media (max-width: 480px) {
        .text1 {
            font-size: 30px;
            letter-spacing: 2px;
        }

        .navbar {
            padding: 10px;
        }

        .navbar a {
            display: block;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            margin: 5px 0;
        }

        .navbar .right {
            float: none;
            text-align: center;
        }
        }
    </style>
</head>
<body>
    <form action="deleteReservation-php.php" method="post">
        <h3>Delete Reservation</h3>

        <label for="id">ID:</label>
        <input type="text" id="id" name="did" value="<?php echo $id; ?>" readonly>

        <label for="reservationId">Reservation ID:</label>
        <input type="text" id="reservationId" name="dreservationId" value="<?php echo $reservationId; ?>" readonly>

        <label for="name">Name:</label>
        <input type="text" id="name" name="dname" value="<?php echo $name; ?>" readonly>

        <label for="email">Email:</label>
        <input type="email" id="email" name="demail" value="<?php echo $email; ?>" readonly>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="dphone" value="<?php echo $phone; ?>" readonly>

        <label for="vehicleType">Vehicle Type:</label>
        <input type="text" id="vehicleType" name="dvehicleType" value="<?php echo $vehicleType; ?>" readonly>

        <label for="date">Date:</label>
        <input type="date" id="date" name="ddate" value="<?php echo $date; ?>" readonly>

        <label for="time">Time:</label>
        <input type="time" id="time" name="dtime" value="<?php echo $time; ?>" readonly>

        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="dduration" value="<?php echo $duration; ?>" readonly>

        <button>delete</button>
    </form>

    <!--navigation bar-->
    <div class="navbar">
    <a href="../home.php">Home</a>
    <a href="addReservation.php">Add Reservation</a>
    <a href="../complain/complain.php">Complaints</a>
    <a href="../payment/payment.php">Add Payment</a>
    <a href="../payment/payment-display.php">Manage Payment</a>
    <a href="setting.php">Profile</a>

        <!-- Right aligned buttons -->
        <div class="right">
            <a href="profile.php">
                <img src="../profile-user.png" alt="Profile Icon" class="profile-icon">
            </a>
            <a href="../index.php" class="sign-out">Sign Out</a>
        </div>
    </div>

    <!--footer section-->
    <div class="footer">
        This is the student management system 2024
    </div>
</body>
</html>
