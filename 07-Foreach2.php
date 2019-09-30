<?php 
echo "<h1>Trabajando con el ciclo Foreach</h1>";
#Arreglo
$comidas= array("milanesas","papas fritas","empanadas","pizza");

#echo "<pre>";
#print_r($comidas);

#COMIDA ARRAY
#INDICE SERIA KEY [0],[1],[2],[3]
#Valor de cada arreglo - ej: "milanesas"
foreach ($comidas as $indice => $valor) {
	echo "Indice:" . $indice. "--> " . $valor. "<br>";
}

# SOLO PARA OBTENER EL VALOR DEL DENTRO DEL INDICE
foreach ($comidas as $valor) {

#Valor ej: "milanesas"
	echo "Sin indice: " . $valor. "<br>";
}

#echo "<pre>"; # MUESTRA
#print_r ($peliculas);

#OTRO EJEMPLO - ARREGLO ASOCIATIVO, INDICE CADENA/TEXTO
$peliculas =array(
	"Accion" => array("Los Vengadores","Rambo"),
	"Comedia" => array("Mi abuelo es un peligro"),
	"Rerror" => array("Mama", "Conjusto2"),
);
#ESTO NOS VA A TRAER LOS GENEREOS DE PELICULA PERO NO LOS TITULOS
foreach ($peliculas as $genero => $titulo) {
	echo  "<strong>" . $genero . "</strong>";
	echo "<hr>";
	#ESTO NOS VA A TRAER LOS LOS TITULOS
	foreach ($titulo as $t){
		echo $t . "<br>";
	}
}




 ?>