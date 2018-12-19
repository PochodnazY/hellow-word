<?php 
session_start();
$a = $_POST['aPP'];
$b = $_POST['bPP'];
$h = $_POST['hPP'];



$polePro= ($a*$b*$h);
 
$_SESSION['polePro'] = $polePro;
header('Location:index.php');
 
?>