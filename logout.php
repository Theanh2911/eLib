<?php 
session_start();
ob_start();
unset($_SESSION['login']);
header("location: index.php");
?>