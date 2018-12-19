<?php
//Pole Trojkąta: 
session_start();
$c=$_POST['aT'];
$d=$_POST['hT'];
 
$poleT=(($c*$d)/2);

$_SESSION['poleT']=$poleT;

header('Location:index.php');


// 
?>