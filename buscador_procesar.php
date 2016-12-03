    <?php


     $nombre =$_POST['nombre'];

    $apellido =$_POST['apellido'];

    $dni =$_POST['dni'];

    $patente =$_POST['patente'];





    $nombre_saneado = filter_var ($nombre,FILTER_SANITIZE_STRING);

    $apellido_saneado = filter_var ($apellido,FILTER_SANITIZE_STRING);

    $dni_saneado = filter_var ($dni,FILTER_SANITIZE_NUMBER_INT);

    $sexo_saneado = filter_var ($patente,FILTER_SANITIZE_STRING);


    $nombre_validade = filter_var ($nombre,FILTER_VALIDATE_INT);

    var_dump( filter_var ($patente['tipo'], FILTER_VALIDATE_INT) );

    $var = "diego";  
    if(filter_var($nombre, FILTER_VALIDATE_BOOLEAN) === false){  
    echo "El nombre es valido!";
    }else{
    echo "El nombre es invalido";
    }

    $valor = sanearCadena($patente['tipo']);

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

