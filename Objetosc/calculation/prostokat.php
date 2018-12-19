<?php
session_start();
//Pole Prostokąta: 

$a = $_POST['1'];
$b = $_POST['0'];
 
$poleP = $a * $b;

$_SESSION['result'] = $poleP;

header('Location: ../index.php');
