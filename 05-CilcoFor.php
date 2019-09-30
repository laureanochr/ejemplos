<?php 
#Array Multidimencional: indices 0-1-2-3..(0,1,2)
$barcos=array(
	"A"=>array("nada","nada","Barco1-1"),
	"B"=>array("Barco3-1","nada","nada"),
	"C"=>array("Barco3-2","Barco2-1","nada"),
	"D"=>array("Barco3-3","Barco2-2","nada"),
);
#echo $barcos["A"][2];

#ARREGLO MULTIDIMENSIONAL MIXTO
#EJEMPLO BATALLA NAVAL

#Para array asociativo
foreach ($barcos as $letra => $fila) {
	echo"<br>";
#PARA ARRARY INDEXADO
for ($ubicacion=0; $ubicacion <count($fila); $ubicacion++) { 
		echo "Cordenadas -> ". $letra ."-". $ubicacion. "Valor-> " . $fila[$ubicacion]. "<br>";
	}	
}

/* SE PUEDE REEMPLAZAR POR:
foreach ($barcos as $letra => $fila) {
	echo  "<strong>" . "Coordenadas -> ". $letra . "</strong>". "<br>";
	#ESTO NOS VA A TRAER LOS LOS TITULOS
	foreach ($fila as $f){
		echo "Valor ->" . $f . "<br>";
}
}*/
?>