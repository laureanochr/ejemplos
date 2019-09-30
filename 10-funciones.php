<?php 
#Argumento de Funciones.
#Son Evaluados de Izquiera a derecha.
#Se define nombre de funcion y variables()

#--------------
#Argumentos contienen valor
function suma($num1,$num2){
$suma= $num1 + $num2;

	echo "<strong>" ."La suma es $suma<br>" . "</strong>" ;
	echo "<hr>";
}
suma(10,5);

#--------------
#Array dentro de funcion
suma_array(array(10,4,13,4));

function suma_array($entrada){
$num1=$entrada[0]; #EL VALOR ES 10.
$num2=$entrada[1]; #EL VALOR ES 4.
$num3=$entrada[2]; #EL VALOR ES 14.
$num4=$entrada[3]; #EL VALOR ES 4.

echo "La suma 10 + 4 es " .  "<strong>" .($num1+$num2) . "</strong>" . "<br>"; 
echo "La resta de 13 - 4 es " . "<strong>" . ($num3-$num4) . "</strong>" . "<br>"; 
echo "<hr>";
}

#--------------
#Funcion por referencia

function resta(&$num){

$num=20-$num;

}

$result=13;

echo "<strong>" . $result . "</strong>" . "<br>";
echo "<hr>";

#--------------
#Funciones Recursivas: se llama asi misma

function recursividad($a){

	if ($a<20){
		echo "$a" . "<br>";

		recursividad($a+1);
	}
}
recursividad(1);

 ?>