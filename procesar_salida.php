<?php
    
$server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";

    $link = mysql_connect($server, $user, $pass);
  
    $horario = $_POST['horario'];

    mysql_select_db($db, $link);

    $sql =  "UPDATE horarios SET fecha_egreso = now() WHERE id_horario = ".$horario;

    $result = mysql_query($sql);

    if( $result ){
        header('Location: registros_ingresos.php');
    }

?>