<?php 

#Condiciones.
#Con las condiciones se llama a lo ultimo a la funcion.
$age=18;

if ($age<=18){
	function fiesta(){

		echo  "<center>" ."<strong>" . "Bienvenido a la fiesta" . "</strong>" . "</center>" . "<br>";
		echo "<hr>";

	}
}
fiesta();


#Funciones dentro de funciones.
#Es indistinto llamar a antes o despues de la funcion.

	function foo(){
		function bar(){
			echo "<strong>" . "hola ya existo" . "</strong>" ."<br";
		}
		echo "<h3>" . "Hola antes de existir" . "</h3>" . "<br>";
	}
#Primero se debe llamar la primer funcion.
foo();
bar();


#Funcion Basica.

function nombrefunc(){

echo "Hola Funcion". "<br>";

}
nombrefunc();


 ?>
