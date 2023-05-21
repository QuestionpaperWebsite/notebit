<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "notebit";

//Create connection
$conn = new mysqli($servername, $username, $password,$database);

//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



// If form is submitted, process the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $mail = $_POST['mail'];
    $password = $_POST['password'];
   
    $sql = "SELECT fname, mail, lname, pass FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    
    $result = mysqli_query($conn, $sql);
    $show = mysqli_fetch_assoc($result);
    
    if ((mysqli_num_rows($result)) > 0) {
        //echo "Login successful!";
         $_SESSION['Name'] = $show['fname'] ." ". $show['lname'];
         $_SESSION['mail'] = $mail;
         $_SESSION['pass'] = $password;
        header("Location: branch.php");
    } else {
        echo "<h1>Invalid login credentials!</h1>";
    }

    $sql = "SELECT fname FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);


}

?>
