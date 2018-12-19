<?php 

$a = $_POST['aS'];


 if ($a<=0)
 {
	 echo "A musi byc wieksze od 0"; 
 }
 else
 {
$ob=$a*$a*$a;
echo "Objetosc (V) wynosi: $ob";
 }

?>