
<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema";



    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);    

    $queryPersonas = "select * from persona;";

    $result = mysql_query($queryPersonas);

    if( $result ){      
      while( $res = mysql_fetch_array($result) ){
        $arrPersonas[]['nombre_completo'] = $res['nombre']."-".$res['apellido'];

      }
      echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }


    $link = mysql_connect($server, $user, $pass);
    
    mysql_select_db($db, $link);    

    $queryVehiculo = "select * from Vehiculo;";

    $result = mysql_query($queryVehiculo);

    if( $result ){      
      while( $res = mysql_fetch_array($result) ){
         $arrVehicula[]['patente'] = $res['patente'];
      }
      echo "</tbody>";
        echo "</table>";
    }else{
        echo mysql_error();
    }

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
      <form action="persona_procesar.php" method="POST" id="form" name="form">

      <div class="starter-template">
        <h1>Plantilla de arranque</h1>
        <p class="lead">BUSCADOR DE PERSONAS Y VEHICULOS.</p>
      </div>

      <div class="row">
      	<div class="col-md-4">
        
          <h1>BUSCADOR</h1>

          <P>DNI</P>
          <input type="search" name="dni" id="dni" placeholder="DNI">
          
          <br/>

          <button type="submit" name="buscar" id="buscar">Buscar</button>
          
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