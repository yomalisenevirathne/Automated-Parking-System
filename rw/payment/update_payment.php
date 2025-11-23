<?php
// Include the database connection file
include("connection.php");

// Check if the 'id' is passed through the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing payment details from the database
    $query = "SELECT * FROM payment WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the payment record is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch the record as an associative array
    } else {
        echo "Record not found!";
        exit;
    }
} else {
    echo "No ID provided!";
    exit;
}

// If the form is submitted to update the payment record
if (isset($_POST['submit'])) {
    // Collect form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['district'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    // Update the payment record in the database
    $update_query = "UPDATE payment 
                     SET username = ?, email = ?, address = ?, city = ?, state = ?, card_number = ?, exp_month = ?, expire_date = ?, cvv = ? 
                     WHERE id = ?";
    $stmt_update = $con->prepare($update_query);
    // Bind the parameters: 9 strings (s) and 2 integers (i) for expmonth and expyear
    $stmt_update->bind_param("ssssssissi", $name, $email, $address, $city, $state, $cardnumber, $expmonth, $expyear, $cvv, $id);

    if ($stmt_update->execute()) {
       
        header("Location:payment-display.php"); // Redirect to the page that lists payments after updating
        exit;
    } else {
        echo "Error updating record: " . $stmt_update->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have styles.css ready -->
</head>
<body>

<div class="container">
    <form action="" method="post">
        <div class="billing-details">
            <h2>Update Payment</h2>

            <label for="name">Full name</label>
            <input type="text" id="name" name="name" value="<?php echo $row['username']; ?>" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>" required>

            <div class="row">
                <div class="col-50">
                    <label for="state">State</label>
                    <select id="state" name="district" required>
                        <option value="">Choose State...</option>
                        <option value="Kurunegala" <?php if($row['state'] == 'Kurunegala') echo 'selected'; ?>>Kurunegala</option>
                        <option value="Colombo" <?php if($row['state'] == 'Colombo') echo 'selected'; ?>>Colombo</option>
                        <option value="Kandy" <?php if($row['state'] == 'Kandy') echo 'selected'; ?>>Kandy</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="payment-details">
            <h2>Card Information</h2>

            <label for="cardnumber">Credit Card Number</label>
            <input type="text" name="cardnumber" id="cardnumber" value="<?php echo $row['card_number']; ?>" required>

            <label for="expmonth">Exp Month</label>
            <input type="text" name="expmonth" id="expmonth" value="<?php echo $row['exp_month']; ?>" required>

            <div class="row">
                <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <select id="expyear" name="expyear" required>
                        <option value="">Choose Year...</option>
                        <option value="2024" <?php if($row['expire_date'] == '2024') echo 'selected'; ?>>2024</option>
                        <option value="2025" <?php if($row['expire_date'] == '2025') echo 'selected'; ?>>2025</option>
                        <option value="2026" <?php if($row['expire_date'] == '2026') echo 'selected'; ?>>2026</option>
                    </select>
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" name="cvv" id="cvv" value="<?php echo $row['cvv']; ?>" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn">Update Payment</button>
        </div>
    </form>
</div>

</body>
</html>
