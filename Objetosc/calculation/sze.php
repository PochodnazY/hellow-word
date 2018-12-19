<?php 
session_start();

$a = $_POST['0'];

$poleSze = 6 * pow($a, 2);
$_SESSION['result'] = $poleSze;

header('Location: ../index.php');
