<?php 
include 'config.php';
error_reporting(0);
session_start(); 
$username = $_SESSION['username']; 
$sql = "UPDATE users SET fase = 'Program Kehamilan' WHERE username='$username'";
$result = mysqli_query($conn, $sql);
header("Location: home.php");
?>