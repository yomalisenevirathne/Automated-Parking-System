<!DOCTYPE html>
<html>
<head>
  <title>Add Reservation Page</title>
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

    /* Cards styling */
    .card-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* 3 cards per row */
      gap: 20px;
      padding: 50px;
      margin-top: 70px;
    }

    .card {
      position: relative;
      overflow: hidden;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      transition: 0.3s;
      background-color: #f9f9f9; /* Fallback background */
    }

    .card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      filter: blur(1.5px); /* Apply blur to background */
      z-index: 0; /* Ensure it is behind the content */
      transition: background-image 0.3s ease-in-out;
    }

    /* Set the background images for each card */
    .card:nth-child(1)::before {
      background-image: url('https://carfromjapan.com/wp-content/uploads/2019/05/parking-lots.jpg');
    }

    .card:nth-child(2)::before {
      background-image: url('https://res.cloudinary.com/spothero/image/upload/w_728,h_384,q_200,x_1936,y_834,c_fill,g_xy_center,f_auto/c_scale,fl_relative,g_south_east,l_logos:spothero,o_27,w_0.25,x_0.05,y_0.05/v1662489290/yymnmzmcy8w60tkkd0tu.jpg');
    }

    .card:nth-child(3)::before {
      background-image: url('https://www.zuken.com/us/wp-content/uploads/sites/12/2023/11/BL0680-The-Evolution-of-Electric-Vehicle-Charging-Infrastructure-zuken-1510x731.jpg');
    }

    .card:nth-child(4)::before {
      background-image: url('https://i.redd.it/td8kvbolyyj31.jpg');
    }

    .card:nth-child(5)::before {
      background-image: url('https://www.theparkingspot.com/getmedia/9be5d5c8-fbc0-41d1-8a32-f68873f79e41/long-term.webp');
    }

    .card:nth-child(6)::before {
      background-image: url('https://cdn.viewing.nyc/assets/media/7bcb2c6d23129b2347bf713596648dfc/elements/ee66f39e6a5d38d8a6721f89d18c35fe/bb420260-666e-4997-9d3c-bb0b519f7e5c.jpg');
    }

    .card:nth-child(7)::before {
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyGgI61M15I64wmcoVU3Ir9bIs9YYXzJe_bQ&s');
    }

    .card:nth-child(8)::before {
      background-image: url('https://c8.alamy.com/comp/A067RG/3-motorcycles-share-a-parking-spot-on-the-street-in-annarbor-michigan-A067RG.jpg');
    }

    .card:nth-child(9)::before {
      background-image: url('https://www.wemadethis.co.uk/wp-content/uploads/2011/07/10bicycles_2.jpg');
    }

    .card-content {
      position: relative;
      z-index: 1;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-description {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .apply-btn {
      background-color: #3d64ab;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .apply-btn:hover {
      background-color: #8ca9e1;
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

      .card-container {
        grid-template-columns: repeat(2, 1fr);
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

      .card-container {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
    
  <!--navigation bar-->
  <div class="navbar">
    <a href="../home.php">Home</a>
    <a href="addReservation.php">Add Reservation</a>
    <a href="../complain/complain.php">Complaints</a>
    <a href="../payment/payment.php">Add Payment</a>
   

    <!-- Right aligned buttons -->
    <div class="right">
      <a href="./userprofile/Customer/dashbaord.php">
        <img src="../profile-user.png" alt="Profile Icon" class="profile-icon">
      </a>
      <a href="../index.php" class="sign-out">Sign Out</a>
    </div>
  </div>

  <!-- Cards Section -->
  <div class="card-container">
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 1</div>
        <div class="card-description">Reservation for a standard parking space.</div>
        <button class="apply-btn" onclick="goToForm(1)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 2</div>
        <div class="card-description">Reservation for a premium parking space near the entrance.</div>
        <button class="apply-btn" onclick="goToForm(2)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 3</div>
        <div class="card-description">Reservation for an electric vehicle charging spot.</div>
        <button class="apply-btn" onclick="goToForm(3)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 4</div>
        <div class="card-description">Reservation for a motorcycle parking space.</div>
        <button class="apply-btn" onclick="goToForm(4)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 5</div>
        <div class="card-description">Reservation for a long-term parking space.</div>
        <button class="apply-btn" onclick="goToForm(5)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 6</div>
        <div class="card-description">Reservation for a bicycle parking space.</div>
        <button class="apply-btn" onclick="goToForm(6)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 7</div>
        <div class="card-description">Reservation for a scooter parking space.</div>
        <button class="apply-btn" onclick="goToForm(7)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 8</div>
        <div class="card-description">Reservation for a compact car parking space.</div>
        <button class="apply-btn" onclick="goToForm(8)">Apply</button>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="card-title">Reservation 9</div>
        <div class="card-description">Reservation for a bicycle parking space.</div>
        <button class="apply-btn" onclick="goToForm(9)">Apply</button>
      </div>
    </div>
  </div>

  <div style="text-align: center;">
    <button onclick="goToTable()" style="display: block; margin: 10px auto; border: none; border-radius: 3px; padding: 7px; background-color: rgb(47, 63, 157); color: white;">MY Reservations</button>
  </div>

  <script>
    function goToTable() {
        window.location = 'reservationTable.php';
    }
  </script>

  <!--footer section-->
  <div class="footer">
        This is the student management system 2024
  </div>

  <script>
    function goToForm(id) {
      window.location.href = `reservationForm.php?id=${id}`;
    }
  </script>
</body>
</html>
