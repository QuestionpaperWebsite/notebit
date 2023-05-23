<?php
include 'conn\connection.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  if($pass!=$cpass){
    echo "Please enter the same password in both fields!";
  }

  else{
    $sql = "INSERT INTO `notebitdata` VALUES (NULL,'$fname','$lname','$mail','$pass','$cpass')";
    $result = mysqli_query($conn,$sql);
  
    if($result){
      //echo "Record inserted sucessfully";
      echo "<script type='text/javascript'>if (window.confirm('Account has been created. Click OK to redirect the Signin Page.')){window.open('index.php', '_blank');};</script>";
    }

  }

 


}
?>