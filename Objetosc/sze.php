<?php 
session_start();
$a = $_POST['aS'];


$poleSze=6*($a*$a);
$_SESSION['poleSze']=$poleSze;
header('Location:index.php');
?>