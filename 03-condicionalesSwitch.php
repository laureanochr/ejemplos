<?php 

echo "<h3> Condicionales Multiples</h3>";

//Rango 1=> Verano
//Rango 2=> Invierno
//Rango 3=> Otoño
//Rango 4=> Primavera

$numeroest =6;
switch ($numeroest) {
	case 1:
		echo "Verano";
		break;
	case 2:
		echo "Invierno";
		break;
	case 3:
		echo "Otoño";
		break;
	case 4:
		echo "Primavera";
		break;
	default:
		echo "No exite tantas estaciones";
		break;
}

 ?>