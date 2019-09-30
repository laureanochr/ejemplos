<?php 
/*
echo "<pre>";
print_r($_POST);

NOS VA A MOSTRAR LO SIGUIENTE
Array
(
    [nombre] => Laureano
    [apellido] => Grillo
    [email] => laureanogrillo@gmail.com
    [dni] => 36786341
    [localidad] => 
    [movil] => Array
        (
            [0] => Auto
        )
)*/
$_nombre = $_POST["nombre"];
$_apellido = $_POST["apellido"];
$_email = $_POST["email"];
$_dni = $_POST["dni"];
$_ubicacion = $_POST["ubicacion"];
$_movil = $_POST["movil"];
 
echo "Mi nombre es " . $_nombre . "<br>";
echo "Mi Apellido es " . $_apellido . "<br>";
echo "Mi email es " . $_email . "<br>";
echo "Mi dni es " . $_dni . "<br>";
echo "Vivo en " . $_ubicacion . "<br>";

foreach ($_movil as $value) {
	echo "Tengo un/a " . $value . "<br>";
}

 ?>