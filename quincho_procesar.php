    <?php

	$fecha =$_POST['fecha'];

	$dia =$_POST['dia'];

	$turno =$_POST['turno'];

    $parrilla =$_POST['parrilla'];

    $tablon =$_POST['tablon'];

    $silla =$_POST['silla'];



    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);    

    $insertSql = "INSERT INTO quincho (fecha, dia, turno, parrilla, tablon, silla, ) VALUES('".$fecha."', ".$dia.", ".$turno.", '".$parrilla."', '".$tablon."', '".$silla."')";

    $result = mysql_query($insertSql);

    if( $result ){
        header('Location: mostrar_quincho.php');
    }else{
        echo mysql_error();
    }


/*  $fecha_saneado = filter_var ($fecha,FILTER_SANITIZE_STRING);

    $dia_saneado = filter_var ($dia,FILTER_SANITIZE_STRING);

    $turno_saneado = filter_var($turno,FILTER_SANITIZE_NUMBER_INT);

    $parrilla_saneado = filter_var ($parrilla,FILTER_SANITIZE_NUMBER_INT);

    $tablon_saneado = filter_var($tablon,FILTER_SANITIZE_NUMBER_INT);

    $silla_saneado = filter_var ($silla,FILTER_SANITIZE_NUMBER_INT);


