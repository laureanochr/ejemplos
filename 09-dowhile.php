<?php 

echo "<h3> Trabajando con el ciclo DO While </h3>";

$v = 0;

do {
	#cada vez que la variable V entre al do, se incremente.
	echo $v . "<br>"; #Imprimir valores
	$v++;
} while ( $v <= 10);

/* X tiene un valor de 0, el Do imprime el valor de X Cero
y se encuentra con una linea ++ para incrementar, cuando 
ingresa al while, encuentra otra condicion, que tiene que ser
menos o igual a 10*/

#EN EL DO WHILE SE PUEDE AGREGAR MAS CONDICIONES QUE FOR.

$x = 1;
$estado =true;
do {
	#cada vez que la variable V entre al do, se incremente.
	echo $x . "<br>"; #Imprimir valores
	$x++;
} while ( $x <= 3 && $estado);


# DO WHILE C0N ARREGLO
 $comidas= array("tacos","empanadas","pizza");

$x=0; 
$estado=true;
do {
	#cada vez que la variable V entre al do, se incremente.
	echo $comidas[$x] . "<br>"; #Imprimir valores
	$x++;
} while ( $x<count($comidas) && $estado);




 ?>