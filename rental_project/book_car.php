<?php
require('db_connect.php');

// 1. Check if the form was actually submitted
if (isset($_POST['submit_booking'])) {

    // 2. Collect the data from the HTML form
    $car_id     = $_POST['car_id']; 
    $name       = mysqli_real_escape_string($con, $_POST['customer_name']);
    $contact    = mysqli_real_escape_string($con, $_POST['contact_info']);
    $start_date = $_POST['start_date'];
    $end_date   = $_POST['end_date'];

    // 3. The SQL Command
    $query = "INSERT INTO `bookings` (car_id, customer_name, contact_info, start_date, end_date)
              VALUES ('$car_id', '$name', '$contact', '$start_date', '$end_date')";

    // 4. Run the command
    if (mysqli_query($con, $query)) {
        echo "<h1>Booking Confirmed!</h1>";
        echo "<p>Thank you, $name. We have received your booking.</p>";
        echo "<a href='index.php'>Back to Home</a>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If someone tries to open this file directly without submitting a form
    header("Location: index.php");
}
?>