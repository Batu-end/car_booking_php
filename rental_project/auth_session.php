<?php
session_start();
// If the session variable 'username' is missing, redirect to login
if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>