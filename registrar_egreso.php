<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";
    

    $vehiculo =$_POST['vehiculo'];


    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);    

    $insertSql = "INSERT INTO horarios (vehiculo_id, fecha_egreso) VALUES(".$vehiculo.", now())";

    $result = mysql_query($insertSql);

    if( $result ){
        header('Location: registros_egresos.php');
    }else{
        echo mysql_error();
    }




