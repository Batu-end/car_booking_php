<?php
session_start();
// If the user hasn't passed the password check, send them back to login
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: login.php");
    exit();
}
?>