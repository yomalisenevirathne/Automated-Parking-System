<!DOCTYPE html>
<html>
<head>
  <title>Home-page</title>
  <!--animation text style part-->
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

    /* Right aligned profile and sign-out section */
    .navbar .right {
      position: absolute;
      right: 10px;
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
        position: static;
        margin-top: 10px;
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
        position: static;
        text-align: center;
      }
    }
  </style>
  <link rel="stylesheet" href="./complain/CSS/homepagecss.css">
</head>

<body>

<div class="container">
  <h1 class="text1" style="font-weight: bold;">Space finder Reservation System</h1>
</div>
    
  <!--navigation bar-->
  <div class="navbar">
    <a href="home.php">Home</a>
    <a href="./AddReservation/addReservation.php">Add Reservation</a>
    <a href="./complain/complain.php">Complaints</a>
    <a href="./payment/payment.php">Add Payment</a>
    

    <!-- Right aligned buttons -->
    <div class="right">
      <a href="./userprofile/Customer/dashbaord.php">
        <img src="profile-user.png" alt="Profile Icon" class="profile-icon">
      </a>
      <a href="index.php" class="sign-out">Sign Out</a>
    </div>
  </div>

  <!--footer section-->
  <div class="footer">
    This is the student management system 2024
  </div>

</body>
</html>
