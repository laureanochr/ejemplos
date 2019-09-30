<?php 

class Persona
{
private $nombre;
private $apellido;
private $dni;
private $sexo;
private $distrito;

function __construct($nombre,$apellido,$dni,$sexo,$districto)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dni=$dni;
		$this->sexo=$sexo;
		$this->districto=$districto;
	}	

#GETTERS - devuelven un valor

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function getDistricto()
	{
		return $this->districto;
	}

#SETTERS - modificar valores

	public function setNombre($nombre)
	{
		 $this->nombre = $nombre;
	}

	public function setApellido($apellido)
	{
		 $this->apellido = $apellido;
	}

	public function setDni($dni)
	{
		 $this->dni = $dni;
	}

	public function setSexo($sexo)
	{
		 $this->sexo = $sexo;
	}

	public function setDistricto($districto)
	{
		 $this->districto = $districto;
	}




}
 ?>