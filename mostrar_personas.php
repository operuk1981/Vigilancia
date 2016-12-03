<?php
require_once 'Conexion.php';

$conexion = new Conexion("localhost", "root", "admin", "vigilancia");

$conexion->connect();

$sql  = "SELECT * FROM personas";  /*RETORNE id_vehiculo, dominio, persona*/

$conexion->execute($sql);
  
$resultados = $conexion->getResults();

    if( $resultados ){
    	echo "<h1>Personas</h1>";
    	echo "<table class='table-responsive'>";
    	echo "<thead><tr><td>nombre</td><td>apellido</td><td>dni</th><th>sexo</th><th>fechadenacimiento</th><th>telefono</th><th>celular</th><th>email</th><th>tipo</th><th>calle</th><th>altura</th><th>piso</th><th>departamento</tr>";
    
    	echo "<tbody>";
    	while( $res = mysql_fetch_array($resultados) ){
    		echo "<tr><td>".$res['nombre']."</td>";
            echo "<td>".$res['apellido']."</td>";           
            echo "<td>".$res['dni']."</td>";
            echo "<td>".$res['sexo']."</td>";
            echo "<td>".$res['fechadenacimiento']."</td>";
            echo "<td>".$res['telefono']."</td>";
            echo "<td>".$res['celular']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['tipo']."</td>";
            echo "<td>".$res['calle']."</td>";
            echo "<td>".$res['altura']."</td>";
            echo "<td>".$res['piso']."</td>";
    		echo "<td>".$res['departamento']."</td></tr>";
    	}
    	echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }