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
      text-align: left;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .nav-links {
      display: inline-block;
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

    /* Right side for sign in/up */
    .navbar .auth-buttons {
      margin-right: 20px;
    }

    .auth-buttons a {
      padding: 10px 20px;
      background-color: #fff;
      color: #3d64ab;
      border-radius: 4px;
      text-decoration: none;
      margin-left: 10px;
    }

    .auth-buttons a:hover {
      background-color: #8ca9e1;
      color: white;
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

      .auth-buttons a {
        font-size: 14px;
      }
    }

    @media (max-width: 480px) {
      .text1 {
        font-size: 30px;
        letter-spacing: 2px;
      }

      .navbar {
        padding: 10px;
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar a {
        display: block;
        padding: 10px;
        text-align: center;
        font-size: 12px;
        margin: 5px 0;
      }

      .auth-buttons {
        margin-top: 10px;
      }

      .auth-buttons a {
        font-size: 12px;
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
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="">Add Reservation</a>
      <a href="">Complaints</a>
      <a href="">Add Payment</a>
      <a href="">Manage Payment</a>
    </div>
    <!-- Sign In and Sign Up buttons on the right -->
    <div class="auth-buttons">
      <a href="./sign/cssignup.php">Sign In / Sign Up</a>
      
    </div>
  </div>

  <!--footer section-->
  <div class="footer">
    This is the student management system 2024
  </div>

</body>
</html>
