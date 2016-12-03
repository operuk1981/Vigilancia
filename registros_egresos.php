<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";

    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);

    $sql =  "SELECT horarios.fecha_egreso, v.patente  FROM horarios ";
    $sql .= "INNER JOIN vehiculo AS v ON horarios.vehiculo_id = v.id_vehiculo;";

    $result = mysql_query($sql);

    if( $result ){
    	echo "<h1>Registros hoy</h1>";
    	echo "<table class='table-responsive'>";
    	echo "<thead><tr><th>dia</th><th>patente</th></tr>";
    
    	echo "<tbody>";
    	while( $res = mysql_fetch_array($result) ){
    		echo "<tr><td>".$res['fecha_egreso']."</td>";
            echo "<td>".$res['patente']."</td>";                                   
            echo "</tr>";
    	}
    	echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }