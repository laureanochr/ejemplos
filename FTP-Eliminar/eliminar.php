<?php 

$arch=$_POST["archivo"];

#PARA ELIMINAR EL ARCHIVO SE USA EL UNLINK!!

unlink($arch);

if ($arch)
{
	echo "El archivo se elimino correctamente";
}
else
{
	echo "No se pudo eliminar el archivo";
}
?>