<?php
session_start();
//Pole Prostokąta: 

  $a=$_POST['aP'];
   $b=$_POST['bP'];
 
$poleP=$a*$b;

 $_SESSION['poleP']=$poleP;

header('Location:index.php');
 
// 

 
?>