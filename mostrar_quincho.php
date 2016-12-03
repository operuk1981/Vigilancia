<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";

    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);

    $sql  = "SELECT quincho.persona_id, quincho.fecha, quincho.dia, quincho.tueno, quincho.parrilla, quincho.tablon, quincho.silla, p.nombre, p.apellido FROM quincho ";

    $sql .= "INNER JOIN persona AS p ON quincho.persona_id = p.id_persona;";

    $result = mysql_query($sql);

    if( $result ){
    	echo "<h1>Quincho</h1>";
    	echo "<table class='table-responsive'>";
    	echo "<thead><tr><td>fecha</td><td>dia</td><td>turno</th><th>parrilla</th><th>tablon</th><th>silla</th><th>";
    
    	echo "<tbody>";
    	while( $res = mysql_fetch_array($result) ){
    		echo "<tr><td>".$res['fecha']."</td>";
            echo "<td>".$res['dia']."</td>";           
            echo "<td>".$res['turno']."</td>";
            echo "<td>".$res['parrilla']."</td>";
            echo "<td>".$res['tablon']."</td>";
            echo "<td>".$res['silla']."</td></tr>";
    	}
    	echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }