<?php
 include 'conn\connection.php';
 include 'dashboard.php';

 
    $id = $_GET['id'];
    $query = "DELETE FROM `notebitdata` WHERE `no` = ' $id'";
    $data = mysqli_query($conn,$query);

 if($data)
 {
    // echo "DELETED";
 }else{
    // echo "FAILED DELETE";
 }
?>