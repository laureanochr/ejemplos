<?php 	

/*Usar fopen, para abrir archivo.
Seleccionar el archivo y leerlo con clausula "R"*/

$archi=fopen("archivo.txt","r") or die ("Orrurio un problema al abrir el archivo");

#feof LLEGUE AL FINAL DEL ARCHIVO
#!feof NO LLEGUE AL FINAL DEL ACHIVO
#(Hasta que no se lea todo, no se deja de ejecutar)

while (!feof($archi))
{
	#Se crea una variable mediante el FGETS para que me traiga lo que hay dentro y se guarde en la variable traer
	$traer= fgets ($archi);
	#funcion que permite leer saltos de linea
	$saltodelinea= nl2br($traer);

	echo $saltodelinea;

}



 ?>