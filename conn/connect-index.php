<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
include 'conn\connection.php';
// If form is submitted, process the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $mail = $_POST['mail'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    
    $result = mysqli_query($conn, $sql);
    $show = mysqli_fetch_assoc($result);
    // $total = mysqli_num_rows($result);

    // echo ($_SESSION['totaluser'] = $total);
    
    
    if ((mysqli_num_rows($result)) > 0) {
        //echo "Login successful!";
         $_SESSION['Name'] = $show['fname'] ." ". $show['lname'];
         $_SESSION['mail'] = $mail;
         $_SESSION['pass'] = $password;
        header("Location: branch.php");
    } else {

        //echo "<h1>Invalid login credentials!</h1>";
    }

    $sql = "SELECT fname FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);


}

?>
