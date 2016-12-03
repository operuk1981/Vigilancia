<?php

Class quincho
{
    protected $fecha;

    protected $dia;

	protected $turno;

	protected $parrilla;

	protected $tablon;

	protected $silla;

    }

	public function __contruct( $color ){
		$this->color = $color;
	}

	public function __toString(){
		return $this->quincho;
	}

	public function __destroy(){
		$this->quincho = "diego";

    }
	
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function setDia($dia){
		$this->dia = $dia;
	}

	public function setTurno($turno){
		$this->turno = $turno;
	}

	public function setParrilla($parrilla){
		$this->parrilla = $parrilla;
	}

	public function setTablon($tablon){
		$this->tablon = $tablon;
	}

	public function setSilla($silla){
		$this->silla = $silla;
	}

	public function getFecha(){
		return $this->$fecha;
	}

	public function getDia(){
		return $this->$dia;
	}

	public function getTurno(){
		return $this->$turno;
	}

	public function getParrilla(){
		return $this->$parrilla;
	}

	public function getTablon(){
		return $this->$tablon;
	}

	public function getSilla(){
		return $this->$silla;
	}




$quincho = new quincho();

$quincho->setFecha('01/01/2015');

$quincho->SetDia('Lunes');

$quincho->getTurno('Noche');

$quincho->setParrilla('1');

$quincho->setTablon('2');

$quincho->setSilla('16');




echo "\n la fecha es: \n ";
echo $quincho->getFecha();
echo "\n";

echo "\n el dia es: \n ";
echo $quincho->getDia();
echo "\n";

echo "\n el tueno es: \n ";
echo $quincho->getTurno();
echo "\n";

echo "\n la parrilla es: \n ";
echo $quincho->getParrilla();
echo "\n";

echo "\n el tablon es: \n ";
echo $quincho->getTablon();
echo "\n";

echo "\n la silla es: \n ";
echo $quincho->getSilla();
echo "\n";