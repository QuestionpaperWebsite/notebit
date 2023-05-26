<?php
include 'conn\connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
$queries = "SELECT * FROM `notebitdata`";
$data = mysqli_query($conn,$queries);
$total = mysqli_num_rows($data);
$_SESSION['totaluser'] = $total;


function validatePassword($pass) {
    // Check for at least one capital letter
    if (!preg_match('/[A-Z]/', $pass)) {
        return false;
    }

    // Check for at least one special character
    if (!preg_match('/[^a-zA-Z0-9]/', $pass)) {
        return false;
    }

    // Check for at least one number
    if (!preg_match('/[0-9]/', $pass)) {
        return false;
    }

    // Check for at least one lowercase letter
    if (!preg_match('/[a-z]/', $pass)) {
        return false;
    }

    // Password meets all the criteria
    return true;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $currentpass = $_POST['currentpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['confirmpass'];
    $mailid = $_SESSION['mail'];
    $password = $_SESSION['pass'];

    if($currentpass==$password){
        if(validatePassword($newpass)){
            if($newpass==$confirmpass){
                $changePassQuery = "UPDATE `notebitdata` SET pass = '$newpass', cpass = '$confirmpass'  WHERE mail = '$mailid'";
                $changePassResult = mysqli_query($conn, $changePassQuery);
                
                echo "<script type='text/javascript'>if (window.confirm('Password changed successfully. Please login again to continue')){window.open('index.php', '_blank');};</script>";
                header("Location: index.php");
            } else {
                echo "Please enter the same password in both fields";
            }
        } else {
            echo "Please enter the password in valid format";
        }
    }else {
        echo "Current password does not match with entered password";
    }
   
    // $changePassQuery = "UPDATE `notebitdata` SET pass = '$newpass', cpass = '$confirmpass'  WHERE mail = '$mailid'";
    // $changePassResult = mysqli_query($conn, $changePassQuery);

    

    }
?>