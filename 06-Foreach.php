<?php 

#FOREACH NO ES UN BUCLE, SINO UN CONSTRUCTOR

$variable=array(1,2,3,4,5);
#Foreach se define variable luego se crea otra, donde el puntero guarda el resultado de las posiciones.
foreach ($variable as $variable2){
	echo $variable2;
}

#MODIFICAR VALOR DE CADA ELEMENTO DEL ARRAY

$variable=array(1,2,3,4,5);

#Foreach se define variable luego se crea otra, donde el puntero guarda el resultado de las posiciones.
foreach ($variable as &$variable2){
	$variable2=$variable2*2;
}

#visualizar posicion y valor que se encuentra
foreach ($variable as $clave => $variable3){
	echo "$clave ..... $variable3" . "<br>";
}


 ?>