<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	require "Persona.php";
	#Insancia de clase creada
	$per = new Persona();

	#Constructor con parametros
	$per = new Persona("Laureano","Hola, como estas?");

	echo $per->getSaludo();
	echo "<br>";
	echo $per->getSaludoNombre("Carlos");
	echo "<hr>";
	  ?>
</body>
</html>