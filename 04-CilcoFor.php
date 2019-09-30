<?php 
#Ejemplo Basico
 for ($i=0; $i < 15; $i++) { 
 	echo "Incremento en 1 = " . $i . "<br>";
 #Mi valor inicial es 0, y cada ciclo suma 1, hasta ser menor que 15
 }
#Array multidimensional indexado, para obtener valor
# a traves de indices 0-1-2-3..(0,1,2)
$familia=array(
			array("Laureano","Grillo","27"),
			array("Belen","Acosta","23"),
			array("Arturo","Grillo","1"),
			array("Ainhoa","Bello","2"),
);
#Como obtener Array
##$columna=1;
#para obtener el Apellido de Arturo, #GRILLO.

#echo $familia[$fila][$columna];

//Recorrer un arreglo multidimensional.
#Recorrido para la fila
for ($fila=0;$fila<count($familia);$fila++):
#Recorrido para la columna, con el dato guardado de la fila
for ($columna=0;$columna<count($familia[$fila]);$columna++):
#Leer todo:
echo $familia[$fila][$columna]."<br>";
endfor;
endfor;

$Iglesia=	array(
			array("Claudio","Acosta","57","Lafe"),
			array("Dario","Santillan","50","Lafe"),
			array("Enrique","Pontieri","","Lomas"),
			array("Roque","Benitez","57","Lofe"),
			array("Antonio","Grillo","59","Liniers"),
);
for ($fila=0; $fila<count($Iglesia);$fila++):
for ($columna=0;$columna<count($Iglesia[$fila]);$columna++):
	echo $Iglesia[$fila][$columna]."<br>";

endfor;
endfor;

 ?>