<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Add the navbar and footer styles from home.php */
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
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

        /* Centering the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin-top: 60px; /* Space for navbar */
            margin-bottom: 40px; /* Space for footer */
        }

        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        input[type=text], input[type=email], select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-50 {
            flex: 50%;
            padding: 10px;
        }

        button.btn {
            background-color: #3d64ab;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button.btn:hover {
            background-color: #8ca9e1;
        }

        .card-icons {
            margin: 10px 0;
        }

        .card-icons i {
            font-size: 24px;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }

            .navbar .right {
                position: static;
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            form {
                padding: 10px;
            }

            input[type=text], input[type=email], select {
                padding: 10px;
            }

            button.btn {
                padding: 10px;
            }

            .navbar a {
                padding: 10px;
                font-size: 14px;
            }

            .navbar .profile-icon {
                width: 25px;
                height: 25px;
            }

            .footer {
                padding: 5px;
                font-size: 12px;
            }
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
        <a href="./userprofile/Customer/dashbaord.php">
            <img src="../profile-user.png" alt="Profile Icon" class="profile-icon">
        </a>
        <a href="index.php" class="sign-out">Sign Out</a>
    </div>
</div>

<div class="container">
    <form action="payment-php.php" method="post">
        <div class="billing-details">
            <h2>Payment</h2>
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" placeholder="Enter name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter address">

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter city">

            <div class="row">
                <div class="col-50">
                    <label for="state">State</label>
                    <select id="state" name="district">
                        <option value="">Choose State..</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="colombo">colombo</option>
                        <option value="kandy">kandy</option>
                    </select>
                </div>
                <div class="col-50">
                    <label for="zip">Zip code</label>
                    <input type="text" name="zip" id="zip" placeholder="Zip code">
                </div>
            </div>
        </div>

        <div class="payment-details">
            <h2>Payment</h2>
            <label>Accepted Card</label>
            <div class="card-icons">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
            </div>

            <label for="cardnumber">Credit Card Number</label>
            <input type="text" name="cardnumber" id="cardnumber" placeholder="Enter card number">

            <label for="expmonth">Exp Month</label>
            <input type="text" name="expmonth" id="expmonth" placeholder="Enter Month">

            <div class="row">
                <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <select id="expyear" name="expyear">
                        <option value="">Choose Year...</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" name="cvv" id="cvv" placeholder="CVV">
                </div>
            </div>

            <button type="submit" name="submit" class="btn">Proceed to Checkout</button>
        </div>
    </form>
</div>

<!-- Footer section -->
<div class="footer">
    This is the student management system 2024
</div>

</body>
</html>
