<?php
include 'conn\connection.php';
session_start();
$queries = "SELECT * FROM `notebitdata`";
$data = mysqli_query($conn,$queries);
$total = mysqli_num_rows($data);
$_SESSION['totaluser'] = $total;

?>