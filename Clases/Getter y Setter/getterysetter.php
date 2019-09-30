<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title></title>
</head>
<body>
<?php 
	require "persona.php";

	$per = new Persona("Arturo","Grillo","000239","M","Capital Federal");

#Llamo a la funcion que se va a encargar de traerme el nombre.
#Per es la variable de instancia que nos permite acceder a todo lo que esta alli.

#modificar valor dni
$per-> setDni("36786341");
$per-> setNombre("Laureano");
#devolver valores
	echo $per->getNombre() . "<br>";
	echo $per->getApellido(). "<br>";
	echo $per->getDni(). "<br>";
	echo $per->getSexo(). "<br>";
	echo $per->getDistricto(). "<br>";

echo "<pre>";
#Variable pre, toda la escructura del objeto
print_r($per);
echo "<br>";
var_dump($per);

 ?>
</body>
</html>