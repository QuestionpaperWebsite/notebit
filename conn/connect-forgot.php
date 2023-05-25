<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
include 'conn\connection.php';
// If form is submitted, process the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $mail = $_POST['mail'];
   
    $sql = "SELECT fname, mail, pass FROM `notebitdata` WHERE mail = '$mail'";
    
    $result = mysqli_query($conn, $sql);
    $show = mysqli_fetch_assoc($result);
    
    if ((mysqli_num_rows($result)) > 0) {
        //echo "Login successful!";
         $_SESSION['pass'] = $show['pass'];
        // header("Location: branch.php");
    } else {
        // echo "Enter a valid email";
    }

    $sql = "SELECT pass FROM `notebitdata` WHERE mail = '$mail'";
    $result = mysqli_query($conn, $sql);


}

?>
