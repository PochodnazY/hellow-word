<?php

 session_start();
echo"<b>Wynik: </b>";
//Pole Koła: 
 
if (isset($_SESSION['poler'])) 
{
echo $_SESSION['poler'];
}
 
// Objetosc Prostopadloscianu
if (isset($_SESSION['polePro'])) 
{
echo $_SESSION['polePro'];
}

// Pole prostokata
if(isset($_SESSION['poleP']))
{
echo $_SESSION['poleP'];
}

//Pole Trojkata
if(isset($_SESSION['poleT']))
{
echo $_SESSION['poleT'];
}

// Pole Sześcianu
if(isset($_SESSION['poleSze']))
{
echo $_SESSION['poleSze'];
}



session_destroy();
?>

<!DOCTYPE HTML> 
<html lang="pl"> 
 <head>
 </head>
 
 <style>
 body
  {
    background-color:#222222;
	 font-size: 24px;
	 color:white;
	  font-family: Berlin Sans FB;
   }
 </style>
 
 
 <body>
 <p> Oblicz pole prostokata o bokach a i b: </p>
 
<form action="prostokat.php" method="post">

A:<input type="text" name="aP" /><br />
B:<input type="text" name="bP" /><br />

<input type="submit" name="oblicz" value="oblicz" />

</form>

 <p> Oblicz pole trojkata o boku a i wysokosci  h : </p>
 
<form action="trojkat.php" method="post">

A:<input type="text" name="aT" /><br />
H:<input type="text" name="hT" /><br />

<input type="submit"  value="Oblicz" />

</form>

<p> Oblicz pole kola o promieniu r : </p>
 
<form action="kolo.php" method="post">

R:<input type="text" name="r" /><br />

<input type="submit"  value="Oblicz" />

</form>


<form action="pro.php" method="post">

<p> Oblicz objetosc prostopadloscianu: </p>

A:<input type="text" name="aPP" /><br />
B:<input type="text" name="bPP" /><br />
H:<input type="text" name="hPP" /><br />

<input type="submit"  value="oblicz" />

</form>

<form action="sze.php" method="post">

<p> Oblicz pole szescianu: </p>

A:<input type="text" name="aS" /><br />

<input type="submit" name="oblicz" value="oblicz" />

</form>

<form action="szev.php" method="post">

<p> Oblicz objetosc szescianu: </p>

A:<input type="text" name="aS" /><br />

<input type="submit" name="oblicz" value="oblicz" />

</form>





</body> 
</html>