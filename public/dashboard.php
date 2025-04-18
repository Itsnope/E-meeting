<?php

session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
echo "Selamat datang, " . $_SESSION['user_name'];

?>

<br><a href="logout.php">Logout</a>