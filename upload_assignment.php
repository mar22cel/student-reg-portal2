<?php
include 'includes/session.php';
include 'includes/config.php';

if ($_SESSION['role'] != 'student') die("Access Denied");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["assignment"])) {
    $filename = basename($_FILES["assignment"]["name"]);
    $target = "uploads/" . $filename;
    move_uploaded_file($_FILES["assignment"]["tmp_name"], $target);

    $stmt = $conn->prepare("INSERT INTO assignments (student, file) VALUES (?, ?)");
    $stmt->bind_param("ss", $_SESSION['user'], $filename);
    $stmt->execute();
    echo "Assignment uploaded!";
}
?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="assignment"><br>
  <button type="submit">Upload</button>
</form>
