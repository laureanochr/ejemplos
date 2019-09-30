<?php 

#------------Funciones anonimas

$saludo = function($nombre){
	echo $nombre . "<br>";
}; # CERRAR CON PUNTO Y COMA LA DECLARACION DE LA VARIABLE CON FUNCION.
$saludo("Laureano");

#------------
$suma=function ($num1,$num2){
return $num1+$num2;

};

echo "Edad ". $suma(10,17) . "<br>";
echo "<hr>";


#------------ Funciones Variables

#PHP busca una funcion con el mismo nombre que lo evaluado por la variable, una vez que la encuentra la ejecuta.
function saludo($saludo){

echo "Soy la variable funcion $saludo" . "<br>";
}

$variable="saludo";

echo $variable( "<strong>". "Hola" . "</strong>");
echo "<hr>";



#---------
#Para ver si existe la funcion.
#La funcion array_filter es propia del PHP, por eso existe.
#devuelve true o false, dependiendo si encontro o no la funcion.
if (function_exists("array_filter")):
	echo "La funcion existe!" . "<br>";
	echo "<hr>";
else:
	echo "La funcion no existe!". "<br>";
	echo "<hr>";
endif;

#Obtener funciones de un modulo

print_r(get_extension_funcs("xml"));



 ?>