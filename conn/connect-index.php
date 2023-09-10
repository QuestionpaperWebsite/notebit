<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
include 'conn\connection.php';
// If form is submitted, process the data


//----------------------------------------------- TEST PURPOSE----------------------------------------------------

// if(isset($_POST['submit_ind'])){
//     $mail = $_POST['mail'];
//     $password = $_POST['password'];
//     $password = mysqli_real_escape_string($conn, $sql);   
//     $sql = "SELECT * FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    
//     $result = mysqli_query($conn, $sql);
//     $show = mysqli_fetch_assoc($result);
//     if ((mysqli_num_rows($result)) > 0) {
//         //echo "Login successful!";
//          $_SESSION['Name'] = $show['fname'] ." ". $show['lname'];
//          $_SESSION['mail'] = $mail;
//          $_SESSION['pass'] = $password;
//         //  $_SESSION['authenticated'] =true;
//         header("Location: branch.php");
//     }
// }

//------------------------------------------------------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn, $password);   
    // echo $password;
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
         $_SESSION['authenticated'] =true;
        header("Location: branch.php");
    }if($mail=='admin@notebit' && $password='admin'){
        $_SESSION['adminauthenticated'] =true;
        header("Location: dashboard.php");
    }
    else {
    // echo "<script type='text/javascript'> 
    //       document.addEventListener('DOMContentLoaded', function() {
    //           var messageElement = document.getElementById('invalid-login-message');
    //           messageElement.innerHTML = 'Invalid login details! Please try again';

    //           setTimeout(function() {
    //               messageElement.innerHTML = '';
    //           }, 2000);
    //       });
    //   </script>";

    echo "<script type='text/javascript'> 
          document.addEventListener('DOMContentLoaded', function() {
              var messageElement = document.getElementById('invalid-login-message');
              messageElement.innerHTML = 'Invalid login details! Please try again';
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

    $sql = "SELECT fname FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);


}

?>
