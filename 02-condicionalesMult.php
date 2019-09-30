<?php 

echo "<h3> Condicionales Multiples</h3>";

$p = 22;

if ($p<0 OR $p<20){
	echo "Tu promedio esta fuera de Rango". "<br>";
}else{
	if ($p>=0 AND $p<=5){
		echo "Pesimo" . "<br>";
	}
	else if ($p>=6 AND $p<=10){
		echo "Regular" . "<br>";
	}
	else if ($p>=11 AND $p<=15){
		echo "Bueno" . "<br>";
	}
	else{
		echo "Excelente" . "<br>";
	}
}
 ?>