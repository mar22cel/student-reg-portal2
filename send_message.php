<?php
include 'includes/session.php';
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['to_user'];
    $msg = $_POST['message'];
    $from = $_SESSION['user'];

    $stmt = $conn->prepare("INSERT INTO messages (sender, receiver, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $from, $to, $msg);
    $stmt->execute();
    echo "Message sent!";
}
?>
<form method="post">
  To: <input type="text" name="to_user"><br>
  Message:<br><textarea name="message"></textarea><br>
  <button type="submit">Send</button>
</form>
