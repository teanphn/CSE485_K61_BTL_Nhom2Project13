
<?php
if(!isset($_SESSION)){
  session_start();
}
$servername = "localhost";
$username = "root";
$password = "";
$db = "qlcv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>