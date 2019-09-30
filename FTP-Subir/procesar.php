<?php 

/*USAMOS LA VARIABLE SUPER GLOBAL FILE
Y VA A TRAER EL NOMBRE DEL ARCHIVO Y LA FUENTE EL NOMBRE TEMPORAL DONDE ESTA GUARDADO EN ELA COMPUTADURA.
LUEGO LO DONDE LO VA A GUARDAR.*/
copy($_FILES["foto"]["tmp_name"],$_FILES["foto"]["name"]);
ECHO  "<strong>Archivo subido correctamente</strong>";

#Que guarde el nombre del archivo en la variable nombre
$nombre=$_FILES["foto"]["name"];
echo "<img src=\"$nombre\">";

 #------------------------------------------------------------------
 #Para subir en una carpeta especifica

#SE CREA VARIABLES PARA ALMACENAR EN CARPETA ESPECIFICA.
$carpeta= "files/";#CREAR VARIABLE QUE CONTENGA LA CARPETA
opendir($carpeta);#ABRIR CARPETA PARA GUARDAR EN ELLA
#PRIMERO EL DESTINO DE LA CAPERTA Y LUEGO LA GUARDA CON SU NOMBRE
$destino= $capeta.$_FILES["foto"]["name"];

#LO TRAE DE LA FUENTE DONDE SE ENCUENTRA TEMP EL ARCHIVO
copy($_FILES["foto"]["tmp_name"],$destino);
echo  "<strong>Archivo subido correctamente</strong>";

$nombre=$_FILES["foto"]["name"];
echo "<img src=\"files/$nombre\">";





?>