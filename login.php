<?php
session_start();
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $_SESSION['user'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login!";
    }
}
?>
