<?php
include 'conn\connection.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
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
    $show = mysqli_fetch_assoc($changePassResult);
    
    if ((mysqli_num_rows($changePassResult)) > 0) {
        echo "<script type='text/javascript'> 
          document.addEventListener('DOMContentLoaded', function() {
              var messageElement = document.getElementById('valid-password-change-message');
              messageElement.innerHTML = 'Password changed successfully';
              messageElement.style.transition = 'opacity 0.5s';

              setTimeout(function() {
                  messageElement.style.opacity = '0';
                  setTimeout(function() {
                      messageElement.innerHTML = '';
                  }, 500);
              }, 2000);
          });
      </script>";
        
    } else {
        echo "<script type='text/javascript'> 
          document.addEventListener('DOMContentLoaded', function() {
              var messageElement = document.getElementById('valid-password-change-message');
              messageElement.innerHTML = 'Please enter correct details';
              messageElement.style.transition = 'opacity 0.5s';

              setTimeout(function() {
                  messageElement.style.opacity = '0';
                  setTimeout(function() {
                      messageElement.innerHTML = '';
                  }, 500);
              }, 2000);
          });
      </script>";
    }

}

?>