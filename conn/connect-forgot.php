<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
include 'conn\connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_POST['mail'];

    $sql = "SELECT * FROM `notebitdata` WHERE mail = '$mail'";
    $result = mysqli_query($conn, $sql);
    $show = mysqli_fetch_assoc($result);
    
    if ((mysqli_num_rows($result)) > 0) {
        $password = $show['pass'];
        $firstname = $show['fname'];
        $lastname = $show['lname'];
        $to_email = $_POST['mail'];
        $subject = "Forgot Password Request";
        $body = "Dear ".$firstname." " .$lastname. ", your password is :  ".$password;
        $fromName = 'NoteBit Inc';
        $fromEmail = 'official.notebit@gmail.com';
        $headers = "From: $fromName <$fromEmail>";;
        if (mail($to_email, $subject, $body, $headers)) {
            // echo "Email successfully sent to $to_email...";
            echo "<script type='text/javascript'> 
                    document.addEventListener('DOMContentLoaded', function() {
                    var messageElement = document.getElementById('email-sent-message');
                    messageElement.innerHTML = 'Password sent successfully! <br> Please check your spam folder <br> Redirecting to signin page';
                    messageElement.style.transition = 'opacity 0.5s';
      
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 3000);
                    });
                </script>";
        } else {
            // echo "Email sending failed...";
            echo "<script type='text/javascript'> 
                    document.addEventListener('DOMContentLoaded', function() {
                    var messageElement = document.getElementById('email-notsent-message');
                    messageElement.innerHTML = 'There was an error! Email could not be sent';
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
    } else {
        // echo "Enter a valid email";
        echo "<script type='text/javascript'> 
          document.addEventListener('DOMContentLoaded', function() {
              var messageElement = document.getElementById('email-notsent-message');
              messageElement.innerHTML = 'This email does not exist in our database!';
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
