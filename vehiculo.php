<?php

Class Vehiculo
{

	protected $mensual;

	protected $planta;

	protected $cochera;

	protected $marca;

	protected $modelo;

	protected $color;

	protected $patente;

	public function __contruct( $color ){
		$this->color = $color;
	}

	public function __toString(){
		return $this->$Vehiculo;
	}

	public function __destroy(){
		$this->Vehiculo = "diego";

    }

	public function setRodado($mensual){
		$this->mensual = $mensual;
	
	}

	public function setPlanta($planta){
		$this->planta = $planta;
	}

	public function setCochera($cochera){
		$this->cochera = $cochera;
	}
	
	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function setPatente($patente){
		$this->patente = $patente;
	}

	public function getRodado(){
		return $this->$rodado;
	}

	public function getPlanta(){
		return $this->$planta;
	}

	public function getCochera(){
		return $this->$cochera;
	}

	public function getMarca(){
		return $this->$marca;
	}

	public function getModelo(){
		return $this->$modelo;
	}

	public function getColor(){
		return $this->$color;
	}

	public function getPuertas(){
		return $this->$puertas;
	
	}


$Vehiculo = new Vehiculo();

$Vehiculo->setMensual('Inquilino');

$Vehiculo->setPlanta('B');

$Vehiculo->setCochera(15);

$Vehiculo->setMarca('Renault');

$Vehiculo->setModelo('Clio');

$Vehiculo->setColor('Gris');

$Vehiculo->setPatente('JUB 106');


echo "\n el mensual es: \n ";
echo $Vehiculo->getMensual();
echo "\n";

echo "\n la planta es: \n ";
echo $Vehiculo->getPlanta();
echo "\n";

echo "\n la cochera es: \n ";
echo $Vehiculo->getCochera();
echo "\n";

echo "\n el marca es: \n ";
echo $Vehiculo->getMarca();
echo "\n";

echo "\n el modelo es: \n ";
echo $Vehiculo->getModelo();
echo "\n";

echo "\n el color es : \n ";
echo $Vehiculo->getColor();
echo "\n";

echo "\n la patente es: \n ";
echo $Vehiculo->getPatente();
echo "\n";