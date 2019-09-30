<?php 
#---------Devolver valores en una funcion
#Sentencia opcional  RETURN.


#Devulve 30, la diferencia de 40 - 10. Gracias al Return
function resta($num){
	return $num-10;
}

echo resta(40) . "<br>";


function hacer_cafe($tipo="Cortado"){
	return "el cafe es un $tipo" . "<br>";
}
#Al no agregar ningun valor a devuelve, toma el de la variable típo
echo hacer_cafe() . "<br>";
#Si le insertamos valor, respeta el campo enviado.
echo hacer_cafe(null) . "<br>";
echo hacer_cafe("moka") . "<br>";



function persona($nombre="fulanito",$apellido="cosme",$edad=22){

	return "Bienvenido $nombre $apellido de $edad años" . "<br>";
}
#trae igual la edad definida en la funcion, no se puede dejar lugar vacio en la izqueierda
persona("Laureano", "Grillo");
#caso contrario, si se puede dejar datos vacios de la derecha.
persona("Grillo",22);


#Funcion con array, devolviendo valores
function animales ($animales=array(" sin dato", " sin dato"),$tipo="sin tipo"){

	return "Los animales son".implode(",",$animales)." $tipo"."<br>";
}

echo animales() . "<br>";
echo animales(array("Perro","Gato"),"Domesticas") . "<br>";


#Funcion PHP list()
#LA FUNCION FLORES REGRASA UN VALOR, DE TIPO ARRAY
# Y DENTRO DEL ARRAY HAY OTROS VALORES, UBICACOS EN LIST, Y VAMOS A PODER UTILIZARLOS INDIVIDUALMENTE.
Function flores(){
$flor="Clavel";
$color="Morado";
$cantidad="10";
return array($flor,$color,$cantidad);
}
list($fl,$co,$can)=flores();

echo "Hola soy un $fl, mi color es $co, y hay $can unidades" . "<br>";



 ?>