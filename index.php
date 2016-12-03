<?php
require_once 'vendor/autoload.php';
require_once 'Conexion.php';

$conexion = new Conexion("localhost", "root", "", "sistema");

$conexion->connect();

$sql  = "SELECT * FROM vehiculo";  /*RETORNE id_vehiculo, dominio, persona*/

$conexion->execute($sql);
  
$resultados = $conexion->getResults();

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array('cache' => __DIR__ . '/cache'));

echo $twig->render('index.html.twig', array('resultados' => $resultados) );

?>

