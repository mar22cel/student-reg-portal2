<?php
include 'includes/session.php';
include 'includes/config.php';

$user = $_SESSION['user'];
$result = $conn->query("SELECT * FROM messages WHERE receiver='$user'");
while ($row = $result->fetch_assoc()) {
    echo "<b>From:</b> " . $row['sender'] . "<br>";
    echo "<b>Message:</b> " . $row['message'] . "<hr>";
}
?>