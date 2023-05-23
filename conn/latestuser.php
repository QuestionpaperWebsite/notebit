<?php
include 'conn\connection.php';
session_start();
$sqlcommand = "SELECT * FROM `notebitdata` ORDER BY `no` DESC LIMIT 1";
$newdata = mysqli_query($conn,$sqlcommand);
if(mysqli_num_rows($newdata) > 0)
{
    foreach($newdata as $show)
    {
        $_SESSION['latestuser'] = $show['fname']." ".$show['lname'];
    }
}

?>