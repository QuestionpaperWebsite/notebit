<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "notebit";


$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// $sql = "INSERT INTO `notebitdata` VALUES ('arvind','das','arvind@gmail.com','juqdwn','jididjfj')"; 
// $result =  mysqli_query($conn,$sql);  //code to send data into the database

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
    $test = "SELECT * FROM `notebitdata` ORDER BY `notebitdata`.`fname` ASC";
    echo $test;
  
    if($result){
      echo "Record inserted sucessfully";
    }

  }

 


}
?>