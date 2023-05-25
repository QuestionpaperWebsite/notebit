<?php
include 'conn\connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
$queries = "SELECT * FROM `notebitdata`";
$data = mysqli_query($conn,$queries);
$total = mysqli_num_rows($data);
$_SESSION['totaluser'] = $total;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $currentpass = $_POST['currentpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['confirmpass'];
    $mailid = $_SESSION['mail'];
   
    $changePassQuery = "UPDATE `notebitdata` SET pass = '$newpass', cpass = '$confirmpass'  WHERE mail = '$mailid'";
    $changePassResult = mysqli_query($conn, $changePassQuery);
}

?>