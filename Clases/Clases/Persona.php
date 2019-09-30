<?php 

#Clase primera letra mayuscula, nomenclatura camello.

class Persona
{
#Contruccion, funcion anonima que se ejecuta con una instancia de clase 

#El contructor siempre ejecuta primero lo que hay dentro de la funcion

#CONSTRUCTOR SIN PARAMETRO	
public function __construct()
{
	$this-> saludo= "Hola desde la clase Persona";
}

#CONSTRUCTOR CON PARAMETRO	
private $nombre;
private $saludo;

public function __construct($nombre,$saludo)
{
	$this->nombre = $nombre;
	$this->saludo =$saludo;
}

#Funcion
	public function getSaludo()
	{
		#return "Hola, que tal, como estais";
		return $this->saludo;
	}
#Funcion con parametro
	public function getSaludoNombre($nombre="Laureano")
	{
		#return $nombre . ", Hola desde la clase Persona";
		return $nombre. ",".return $this->saludo;

	}



}


 ?>