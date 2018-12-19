<?php
session_start();
//Pole Trojkąta: 

$e = $_POST['0'];

if ($e <=0) {
	$poleR = 'Promien musi być wiekszy od 0'; 
} else {
	$poleR = M_PI * pow($e, 2);
}

$_SESSION['result'] = $poleR;
 
header('Location: ../index.php');
