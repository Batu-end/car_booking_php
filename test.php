<?php
echo "<h1>PHP is working</h1>";

// Test Database driver
if (function_exists('mysqli_connect')) {
    echo "<p style='color:green'>MySQLi driver is INSTALLED. You are good to go.</p>";
} else {
    echo "<p style='color:red'>MySQLi driver is MISSING.</p>";
}
?>