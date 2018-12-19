<?php 
session_start();

$a = $_POST['2'];
$b = $_POST['1'];
$h = $_POST['0'];

$polePro = $a * $b * $h;

$_SESSION['result'] = $polePro;

header('Location: ../index.php');
