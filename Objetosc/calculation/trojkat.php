<?php
session_start();
//Pole Trojkąta: 

$c = $_POST['1'];
$d = $_POST['0'];
 
$poleT = (($c * $d) / 2);

$_SESSION['result'] = $poleT;

header('Location: ../index.php');
