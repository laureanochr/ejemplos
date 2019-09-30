<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Trabajando con clases</h3>
<?php 
require "Persona.php"; 
$per = new Persona(); #Instancia de clase

echo $per->getSaludo();#Llamamos al metodo getSaludos
echo "<br>";
echo  $per->getSaludoNombre("Laureano")

	?>
</body>
</html>