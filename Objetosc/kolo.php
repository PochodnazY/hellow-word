<?php

session_start();
//Pole Trojkąta: 

$e=$_POST['r'];

 if (($e<=0))
 {
	 echo "Promien musi być wiekszy od 0"; 
 }
 else
 {
$poleR=M_PI*($e*$e);

 }
 $_SESSION['poler'] = $poleR;
 
 header('Location:index.php');
// 

?>