<?php
// include 'conn\connection.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
session_start();
session_destroy();
// unset($_SESSION['authenticated']);
header("Location: index.php");
// exit();
?>