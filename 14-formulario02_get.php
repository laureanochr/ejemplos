<?php 
if (isset($_GET["codigo"]) AND isset($_GET["nombre"])){

echo "Mi codigo es" .$GET["codigo"] . "<br>";
echo "Mi nombre es" .$GET["nombre"] . "<br>";
}
else{

	echo "Parametros invalidos";
}

/*
echo "<br>";
var_dump(isset($_GET["nombre"]));



echo "<pre>";
print_r($_GET);

echo "Mi codigo es" .$GET["codigo"] . "<br>";
echo "Mi nombre es" .$GET["nombre"] . "<br>";*/
 ?>