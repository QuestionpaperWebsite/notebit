<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "notebit";

$_SESSION['servername'] = $servername;
$_SESSION['database'] = $database;


$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>