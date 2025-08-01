<?php
session_start();

// If the user submits the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['role'] = 'student'; // default role
    header("Location: register.php");
    exit();
}
?>
