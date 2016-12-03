<?php

require_once 'Conexion.php';

$conexion = new Conexion("localhost", "root", "admin", "vigilancia");

$conexion->connect();

$sql  = "SELECT vehiculos.persona_id, 
                vehiculos.mensual, 
                vehiculos.planta, 
                vehiculos.cochera, 
                vehiculos.marca, 
                vehiculos.modelo, 
                vehiculos.color, 
                vehiculos.patente, 
                p.nombre, 
                p.apellido 
        FROM vehiculos ";

$sql .= "INNER JOIN personas AS p ON vehiculos.persona_id = p.id_persona;";

$conexion->execute($sql);
  
$resultados = $conexion->getResults();



    $result = mysql_query($sql);

    if( $result ){
    	echo "<h1>Vehiculo</h1>";
    	echo "<table class='table-responsive'>";
    	echo "<thead><tr><th>mensual</th><th>planta</th><th>cochera</th><th>marca</th><th>modelo</th><th>color</th><th>patente</tr>";

    	echo "<tbody>";
    	while( $res = mysql_fetch_array($result) ){
    		echo "<tr>".$res['mensual']."</td>";
            echo "<td>".$res['planta']."</td>";
            echo "<td>".$res['cochera']."</td>";
            echo "<td>".$res['marca']."</td>";
            echo "<td>".$res['modelo']."</td>";
            echo "<td>".$res['color']."</td>";
            echo "<td>".$res['nombre']."</td>";
            echo "<td>".$res['apellido']."</td>";
    		echo "<td>".$res['patente']."</td></tr>";
    	}
    	echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }