<?php
include 'includes/session.php';
echo "Welcome " . $_SESSION['user'] . " (" . $_SESSION['role'] . ")<br>";

if ($_SESSION['role'] == 'student') {
    echo "<a href='upload_assignment.php'>Upload Assignment</a><br>";
} else {
    echo "<a href='view_assignments.php'>View Assignments</a><br>";
}
echo "<a href='send_message.php'>Send Message</a><br>";
echo "<a href='inbox.php'>Inbox</a><br>";
echo "<a href='logout.php'>Logout</a>";
?>