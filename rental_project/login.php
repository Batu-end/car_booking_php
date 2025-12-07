<?php
session_start();

// master password for admin access
$admin_password = "admin_67"; 

if (isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['is_admin'] = true;
        header("Location: admin_dashboard.php"); // Redirect to admin panel
        exit();
    } else {
        $error = "Incorrect Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>
    <h2>Admin Access Only</h2>
    <form method="post">
        <input type="password" name="password" placeholder="Enter Admin Password" required>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
</body>
</html>