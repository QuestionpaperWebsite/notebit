<?php
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
echo "Connected successfully";



// If form is submitted, process the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if ((mysqli_num_rows($result)) > 0) {
        echo "Login successful!";
        header("Location: branch.php");
    } else {
        echo "<h1>Invalid login credentials!</h1>";
    }

    $sql = "SELECT fname FROM `notebitdata` WHERE mail = '$mail' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);


}

?>
