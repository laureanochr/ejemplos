<h3> Ciclo  While</h3>


<?php 
#REPITE UNAS SERIE DE CONDICIONES MIENTRAS SE CUMPLA LA CONDICION.
#Definir una varianble previo while.
$aumento=5;
echo "Antes del ciclo While la variable ";

while ($aumento <=10)
{
   echo "Mas uno " . $aumento . "<br>";

   $aumento++; #Obligatorio
}

echo "<br>" . "Fin del ciclo <strong>While</strong>" . "<br>"

?>