<?php
include 'includes/session.php';
include 'includes/config.php';

if ($_SESSION['role'] != 'teacher') die("Access Denied");

$result = $conn->query("SELECT * FROM assignments");
while ($row = $result->fetch_assoc()) {
    echo "Student: " . $row['student'] . "<br>";
    echo "<a href='uploads/" . $row['file'] . "' target='_blank'>Download Assignment</a><hr>";
}
?>