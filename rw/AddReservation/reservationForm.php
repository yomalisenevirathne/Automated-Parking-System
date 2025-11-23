<?php
  // Get the reservation ID from the URL
  $reservationId = isset($_GET['id']) ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reservation Form</title>
  <style>
    /* Style for the body and background image */
    body {
      font-family: sans-serif;
      margin: 20px;
      background-image: url('https://images.pexels.com/photos/12982564/pexels-photo-12982564.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    /* Create a blurred overlay on the background */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: inherit;
      filter: blur(8px);
      z-index: -1; /* Make sure the blur is behind the content */
    }

    /* Form container styling */
    .form-container {
      max-width: 350px; /* Decreased width */
      margin: 0 auto;
      padding: 30px; /* Reduced padding */
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.75); /* Slightly transparent background for the form */
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px; /* Decreased space between label and input */
    }

    input[type="text"], input[type="number"], input[type="date"], input[type="time"], input[type="email"] {
      width: 100%;
      padding: 8px; /* Reduced padding for input fields */
      margin-bottom: 15px; /* Reduced space between input fields */
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 15px; /* Reduced button padding */
      background-color: #3d64ab;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%; /* Full width button */
    }

    button:hover {
      background-color: #8ca9e1;
    }

    /* Adjustments for small screens */
    @media (max-width: 480px) {
      .form-container {
        max-width: 90%; /* Set form to 90% of screen width */
      }
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Reservation Form</h2>

  <form method="post" action="insertReservation-php.php" id="reservationForm" onsubmit="return validateForm();">
    <label for="reservationId">Reservation ID:</label>
    <input type="number" id="reservationId" name="sreservationId" value="<?php echo $reservationId; ?>" readonly>

    <label for="name">Name:</label>
    <input type="text" id="name" name="sname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="semail" required>

    <label for="phone">Phone Number:</label>
    <input type="number" id="phone" name="sphone" required>

    <label for="vehicletype">Type of Vehicle:</label>
    <input type="text" id="vehicletype" name="svehicletype" required>

    <label for="date">Date of Reservation:</label>
    <input type="date" id="date" name="sdate" required>

    <label for="time">Time of Reservation:</label>
    <input type="time" id="time" name="stime" required>

    <label for="duration">Duration of Stay (hours):</label>
    <input type="number" id="duration" name="sduration" required>

    <button type="submit">Submit</button>
  </form>
</div>

<script>
        function validateForm() {
            // Fetch values from the form
            var sreservationId = document.forms["reservationForm"]["sreservationId"].value;
            var sname = document.forms["reservationForm"]["sname"].value;
            var semail = document.forms["reservationForm"]["semail"].value;
            var sphone = document.forms["reservationForm"]["sphone"].value;
            var svehicletype = document.forms["reservationForm"]["svehicletype"].value;
            var sdate = document.forms["reservationForm"]["sdate"].value;
            var stime = document.forms["reservationForm"]["stime"].value;
            var sduration = document.forms["reservationForm"]["sduration"].value;

            // Validate the form
            var nameRegex = /^[A-Za-z\s]+$/;
            var emailRegex = /^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i;

            if (sreservationId == "" || sname == "" || semail == "" || sphone == "" || svehicletype == "" || sdate == "" || stime == "" || sduration == "") {
                alert("All fields must be filled out");
                return false;
            }

            if (!nameRegex.test(sname)) {
                alert("Name should contain only letters and spaces");
                return false;
            }

            if (!semail.endsWith("@gmail.com")) {
                alert("Email should end with @gmail.com");
                return false;
            }

            return true;
        }
</script>

</body>
</html>
