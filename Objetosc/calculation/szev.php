<?php 
session_start();

$a = $_POST['0'];

if ($a <= 0)  {
	$objSz = 'A musi byc wieksze od 0'; 
} else {
	$objSz = pow($a, 3);
}

$_SESSION['result'] = $objSz;

header('Location: ../index.php');