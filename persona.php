<?php

Class Persona
{

	protected $nombre;

	protected $apellido;

	protected $dni; 

	protected $sexo;

	protected $fechadenacimiento;

    protected $telefono; 

    protected $celular; 

    protected $email; 

    protected $tipo; 

    protected $calle; 

    protected $altura;

    protected $piso; 

    protected $departamento; 



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
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function setFechadenacimiento($fechadenacimiento){
		$this->fechadenacimiento = $fechadenacimiento;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function setCalle($calle){
		$this->calle = $calle;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function setPiso($piso){
		$this->piso = $piso;
	}

	public function setDepartamento($departamento){
		$this->departamento = $departamento;
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

	public function getSexo(){
		return $this->$sexo;
	}

	public function getFechadencimiento(){
		return $this->$fechadenacimiento;
	}

	public function getTelefono(){
		return $this->$telefono;
	}

	public function getCelular(){
		return $this->$celular;
	}

	public function getEmail(){
		return $this->$email;
	}

	public function getTipo(){
		return $this->$tipo;
	}

	public function getCalle(){
		return $this->$calle;
	}

	public function getAltura(){
		return $this->$altura;
	}
	public function getPiso(){
		return $this->$piso;
	}

	public function getDepartamento(){
		return $this->$departamento;
	}


}

$persona = new Persona();

$persona->setNombre('diego');

$persona->setApellido('Operuk');

$persona->setDni(4545646546);

$persona->setSexo('M');

$persona->setFechadenacimiento('01/01/1900');

$persona->setTelefono(0341444444);

$persona->setCelular(2556);

$persona->setEmail(operuk1981hotmailcom);

$persona->setTipo('Propietario');

$persona->setCalle('Laprida');

$persona->setAltura(1667);

$persona->setPiso(1);

$persona->setDepartamento('A');




echo "\n el nombre es: \n ";
echo $persona->getNombre();
echo "\n";

var_dump($persona->getNombre());

echo "\n el apellido es: \n ";
echo $persona->getApellido();
echo "\n";

echo "\n el dni es : \n ";
echo $persona->getDni();
echo "\n";

echo "\n el sexo es: \n ";
echo $persona->getSexo();
echo "\n";

echo "\n la fechadenacimiento es: \n ";
echo $persona->getFechadencimiento();
echo "\n";

echo "\n el telefono es: \n ";
echo $persona->getTelefono();
echo "\n";

echo "\n el celular es: \n ";
echo $persona->getCelular();
echo "\n";

echo "\n el email es: \n ";
echo $persona->getEmail();
echo "\n";

echo "\n el tipo es: \n ";
echo $persona->getTipo();
echo "\n";

echo "\n la callle es: \n ";
echo $persona->getCalle();
echo "\n";

echo "\n la altura es: \n ";
echo $persona->getAltura();
echo "\n";

echo "\n el piso es: \n ";
echo $persona->getPiso();
echo "\n";

echo "\n el departamento es: \n ";
echo $persona->getDepartamento();
echo "\n";
