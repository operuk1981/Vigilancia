<?php
    
    $mensual =$_POST['mensual'];

    $planta =$_POST['planta'];

    $cochera =$_POST['cochera'];        

    $marca =$_POST['marca'];

    $modelo =$_POST['modelo'];

    $color =$_POST['color'];

    $patente =$_POST['patente'];

    $persona =$_POST['persona'];


    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";

    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);

    $insertSql = "INSERT INTO vehiculo (mensual, planta, cochera, marca, modelo, color, patente, persona_id) VALUES(".$mensual.", ".$planta.",".$chochera.", '".$marca."', '".$modelo."', '".$color."', '".$patente."', '".$persona."')";

    $result = mysql_query($insertSql);

    if( $result ){
        header('Location: mostrar_vehiculo.php');
    }else{
        echo mysql_error();
    }
 
