<?php

Class Buscador
{
	protected $nombre;

	protected $apellido;

	protected $dni;

	protected $patente;

	public function __contruct( $nombre ){
		$this->nombre = $nombre;
	}

	public function __toString(){
		return $this->nombre;
	}

	public function __destroy(){
		$this->nombre = "diego";
	}

	
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setDni($dni){
		$this->dni = $dni;

	public function setPatente($patente){
		$this->patente = $patente;
	}

	public function getNombre(){
		return $this->$nombre;
	}

	public function getApellido(){
		return $this->$apellido;
	}

	public function getDni(){
		return $this->$dni;
	}

	public function getPuertas(){
		return $this->$puertas;
	
	}


$Buscador = new Buscador();

$Buscador->setNombre('diego');

$Buscador->setApellido('Operuk');

$Buscador->setDni(OOOOOOOO);

$Buscador->setPatente('JUB 106');


echo "\n el nombre es: \n ";
echo $buscador->getNombre();
echo "\n";

var_dump($buscador->getNombre());

echo "\n el apellido es: \n ";
echo $buscador->getApellido();
echo "\n";

echo "\n el dni es : \n ";
echo $buscador->getDni();
echo "\n";

echo "\n la patente es: \n ";
echo $buscador->getPatente();
echo "\n";