<h2>Temporary Testing Form</h2>

<form action="book_car.php" method="POST">

    <input type="hidden" name="car_id" value="99">
    
    <p>
        <label>Customer Name:</label><br>
        <input type="text" name="customer_name" value="Bomboclat">
    </p>
    
    <p>
        <label>Contact Info (Email/Phone):</label><br>
        <input type="text" name="contact_info" value="bomboclat@email.com">
    </p>
    
    <p>
        <label>Start Date:</label><br>
        <input type="date" name="start_date" value="2025-01-01">
    </p>

    <p>
        <label>End Date:</label><br>
        <input type="date" name="end_date" value="2025-01-08">
    </p>
    
    <button type="submit" name="submit_booking">TEST BOOKING</button>

</form>