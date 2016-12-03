<?php

require_once 'Conexion.php';

$conexion = new Conexion("localhost", "root", "", "sistema");

$conexion->connect();

$sql  = "SELECT * FROM vehiculo";  /*RETORNE id_vehiculo, dominio, persona*/

$sql  = "SELECT id_vehiculo, dominio FROM vehiculo"; /*RETORNA id_vehiculo. dominio*/

$conexion->execute($sql);
  
$resultados = $conexion->getResults();

$link = mysql_connect($server, $user, $pass);
    
mysql_select_db($db, $link);    

$queryPersonas = "select * from persona;";

$result = mysql_query($queryPersonas);



    ?>
    <html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Datos del edificio</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
 </button>
          <a class="navbar-brand" href="http://localhost/proyecto/index.php">Ingresos</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost/proyecto/registros_ingresos.php">Egresos</a></li>
            <li><a href="http://localhost/proyecto/persona_abm.php">Persona</a></li>
            <li><a href="http://localhost/proyecto/vehiculo_abm.php">Vehiculo</a></li>
            <li><a href="http://localhost/proyecto/quincho_abm.php">Quincho</a></li>
            <li><a href="http://localhost/proyecto/buscador_abm.php">Buscador</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <form action="vehiculo_procesar.php" method="POST" id="form" name="form">

      <div class="starter-template">
        <h1>Plantilla de arranque</h1>
        <p class="lead">REGISTRO DE VEHICULOS.</p>
      </div>

      <div class="row">
      	<div class="col-md-4">
        
          <h1>VEHICULO</h1>

          <p>PERSONAS</p>

          <select name="persona">

            <?php 
            
            if( $result ){      
            while( $res = mysql_fetch_array($result) ){     
            //print_r($res);         
              echo "<option value='".$res['id_persona']."'>".$res['nombre']."-".$res['apellido']."</option>";            
            }
                      
            }else{
                echo mysql_error();
            }
            ?>

          </select>
         
          <P><input type="text" name="mensual" id="mensual" placeholder="MENSUAL"list="mensuales"/> <datalist id="mensuales"> <option value="I" /> <option value="P" /> </datalist></p>

          <P><input type="text" name="planta" id="planta"  placeholder="PLANTA" list="plantas"/> <datalist id="plantas"> <option value="A" /> <option value="B" /> </datalist></p>

          <P><input type="number" name="cochera" id="cochera" placeholder="COCHERA"></p>

          <P><input type="text" name="marca" id="marca" placeholder="MARCA"></p>

          <P><input type="text" name="modelo" id="modelo" placeholder="MODELO"></p>

          <P><input type="text" name="color" id="color" placeholder="COLOR"></p>
          
          <P><input type="text" name="patente" id="patente" placeholder="PATENTE"></P>
        
         </br>

          <button type="submit" name="guardar" id="guardar">Guardar</button>
          
      </div>
      </form>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>