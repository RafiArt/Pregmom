<?php 
include 'config.php';
error_reporting(0);
session_start(); 
$id_pengguna = $_SESSION['id']; 
$sql = "INSERT INTO `jadwal` (`id_pengguna`, `jadwal`) VALUES ('".$id_pengguna."', 'Tanya Bidan');";
$result = mysqli_query($conn, $sql);
header("Location: panel.php");
?>