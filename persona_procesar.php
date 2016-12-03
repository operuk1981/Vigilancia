<?php

    $nombre =$_POST['nombre'];

	$apellido =$_POST['apellido'];

	$dni =$_POST['dni'];

	$sexo =$_POST['sexo'];

	$fechadenacimiento =$_POST['fechadenacimiento'];

    $telefono =$_POST['telefono'];

    $celular =$_POST['celular'];

    $email =$_POST['email'];

    $tipo =$_POST['tipo'];

    $calle =$_POST['calle'];

    $altura =$_POST['altura'];

    $piso =$_POST['piso'];

    $departamento =$_POST['departamento'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";


    if( $nombre == "" || $apellido == "" || $dni == ""){
        $datosObligatorios = true;
        header("Location: persona_abm.php");
    }

/*
    $personas;

    if( is_array($personas)){
        if( count($personas) > 0 ){            
            foreach ($personas as $persona) {
                # code...
            }
        }
    }

    if( isset( $vino )){

    }

    if( file_exists($file)){
        $file = $fopen();
    }*/
    


class Conexion
{
    protected $connection;

    protected $user;

    protected $host;

    protected $pass;



    public function __construct($host, $user, $pass, $db )
    {}
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db   = $db;
    
    }

    
    public function connect()
    {
        $this->$connection = mysql_connect( $this->host, $this->$user, $this->pass );
        mysql_select_db($this->db, $this->_connection);
    
    }

    public function prepare($sql)

    {
    
       return $this->_connection->prepare($sql);
    }

    public function __clone()
    
    {

    trigger_error('La clonación de este abjeto no está permitida', E_USER_ERROR);
    

    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);    

    $insertSql = "INSERT INTO persona (nombre, apellido, dni, sexo, fecha_nacimiento, telefono, celular, email, tipo, calle, altura, piso, departamento,) VALUES('".$nombre."', '".$apellido."', '".$dni."', '".$sexo."', '".$fechadenacimiento."', '".$telefono."', '".$celular."', '".$email."', '".$tipo."', '".$calle."', '".$altura."', '".$piso."', '".$departamento."')";

    $result = mysql_query($insertSql);

    if( $result ){
        header('Location: mostrar_personas.php');
    }else{
        echo mysql_error();
    }


/* 

    $nombre_saneado = filter_var ($nombre,FILTER_SANITIZE_STRING);

    $apellido_saneado = filter_var ($apellido,FILTER_SANITIZE_STRING);

    $dni_saneado = filter_var ($dni,FILTER_SANITIZE_NUMBER_INT);

    $sexo_saneado = filter_var ($sexo,FILTER_SANITIZE_STRING);

    $fechadenacimiento_saneado = filter_var ($fechadenacimiento,FILTER_SANITIZE_STRING);

    $telefono_saneado = filter_var($telefono,FILTER_SANITIZE_NUMBER_INT);

    $celular_saneado = filter_var ($celular,FILTER_SANITIZE_NUMBER_INT);

    $email_saneado = filter_var($email,FILTER_SANITIZE_EMAIL);

    $tipo_saneado = filter_var ($tipo,FILTER_SANITIZE_STRING);

    $calle_saneado = filter_var ($calle,FILTER_SANITIZE_STRING);

    $altura_saneado = filter_var ($altura,FILTER_SANITIZE_NUMBER_INT);

    $piso_saneado = filter_var ($piso,FILTER_SANITIZE_NUMBER_INT);

    $departamento_saniado = filter_var ($departamento,FILTER_SANITIZE_STRING);


    $nombre_validade = filter_var ($nombre,FILTER_VALIDATE_INT);

    var_dump( filter_var ($_POST['tipo'], FILTER_VALIDATE_INT) );

    $var = "diego";  
    if(filter_var($nombre, FILTER_VALIDATE_BOOLEAN) === false){  
    echo "El nombre es valido!";
    }else{
    echo "El nombre es invalido";
    }

    $valor = sanearCadena($_POST['tipo']);

    $var = 28610882;  
    if(filter_var($dni, FILTER_VALIDATE_INT) === false){  
    echo "El dni es valido!";
    }else{
    echo "El dni es invalido";
    }

    $var = 'operuk1981@hotmail.com';
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
    echo "El email es valido!";
    }else{
    echo "El email es invalido";
    }



function sanearCadena( $string ){
    //var_dump($string);
    $str = filter_var( $string,  FILTER_SANITIZE_STRING );
    

    return $string;
}


function validate_integer( $integer ){
    if ( filter_var ($integer, FILTER_VALIDATE_INT ) ){
        echo "es valido";
        exit();
    }
    return false;


}

*/