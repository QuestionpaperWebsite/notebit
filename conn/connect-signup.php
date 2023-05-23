<?php
include 'conn\connection.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  // if($pass!=$cpass){
  //   echo "Please enter the same password in both fields!";
  // }

  // else{
  //   $sql = "INSERT INTO `notebitdata` VALUES (NULL,'$fname','$lname','$mail','$pass','$cpass')";
  //   $result = mysqli_query($conn,$sql);
  
  //   if($result){
  //     //echo "Record inserted sucessfully";
  //     echo "<script type='text/javascript'>if (window.confirm('Account has been created. Click OK to redirect the Signin Page.')){window.open('index.php', '_blank');};</script>";
  //   }

  // }

  function isValidEmail($mail) {
    // Use filter_var function to validate email
    return filter_var($mail, FILTER_VALIDATE_EMAIL) !== false;
}


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

// if (isValidEmail($mail)) {
//   if (validatePassword($pass) && $pass==$cpass) {
//     $sql = "INSERT INTO `notebitdata` VALUES (NULL,'$fname','$lname','$mail','$pass','$cpass')";
//     $result = mysqli_query($conn,$sql);
  
//     if($result){
//       //echo "Record inserted sucessfully";
//       echo "<script type='text/javascript'>if (window.confirm('Account has been created. Click OK to redirect the Signin Page.')){window.open('index.php', '_blank');};</script>";
//     }
    
//   } else {
//       echo "Password must contain atleast one special character, uppercase letter, lowercase letter and a number and both passwords must be the same.";
//   }
// } else {
//   echo "Please enter a valid email address";
// }


if (isValidEmail($mail)) {
  if (validatePassword($pass)) {
    if ($pass==$cpass) {
      $sql = "INSERT INTO `notebitdata` VALUES (NULL,'$fname','$lname','$mail','$pass','$cpass')";
      $result = mysqli_query($conn,$sql);
  
      if($result){
        //echo "Record inserted sucessfully";
        echo "<script type='text/javascript'>if (window.confirm('Account has been created. Click OK to redirect the Signin Page.')){window.open('index.php', '_blank');};</script>";
      }
  } else {
      echo "Please enter same password in both fields";
  }
} else {
    echo "Password must contain one uppercase, one lowercase, one special character and one digit";
}
} else {
  echo "Please enter a valid email address";
}




}

?>